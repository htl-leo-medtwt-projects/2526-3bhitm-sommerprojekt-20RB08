<?php
// alles von claude

// db connection holen
require_once __DIR__ . "/../../datenBank/mysqlConnection.php";

// Erlaubte Werte (Whitelist)
$allowed_difficulty = ['all', 'anfänger', 'fortgeschritten', 'experte'];
$allowed_category   = ['all', 'grundlagen', 'rotationen', 'grabs', 'jibbing', 'flips'];
$allowed_preference = ['all', 'favoriten', 'lernen', 'gemeistert'];

// Filter – ungültige Werte werden auf 'all' zurückgesetzt
$search     = substr(trim($_SESSION['filter']['search'] ?? ''), 0, 100);

$difficulty_raw = strtolower(trim($_SESSION['filter']['difficulty'] ?? 'all'));
$difficulty = in_array($difficulty_raw, $allowed_difficulty) ? $difficulty_raw : 'all';

$category_raw = strtolower(trim($_SESSION['filter']['category'] ?? 'all'));
$category = in_array($category_raw, $allowed_category) ? $category_raw : 'all';

$preference_raw = strtolower(trim($_SESSION['filter']['preference'] ?? 'all'));
$preference = in_array($preference_raw, $allowed_preference) ? $preference_raw : 'all';

$params = [];
$types  = "";

$isLoggedIn = isset($_SESSION["login"]) && $_SESSION["login"];

// -------------------------------------------------------
// NICHT eingeloggt: einfache Abfrage ohne User-Daten
// -------------------------------------------------------
if (!$isLoggedIn) {

    $sql = "SELECT t.id, t.titel, t.description, t.created_at, t.image_path,
                   d.name AS difficulty_name,
                   c.name AS category_name
            FROM trick t
            JOIN difficulty d ON t.difficulty = d.id
            JOIN category c   ON t.category   = c.id
            WHERE 1=1";

// -------------------------------------------------------
// EINGELOGGT: Abfrage mit User-Daten (Favorit, Status)
// -------------------------------------------------------
} else {
    $username = $_SESSION["username"];

    $sql = "SELECT t.id, t.titel, t.description, t.created_at, t.image_path,
                   d.name AS difficulty_name,
                   c.name AS category_name,
                   ut.is_favorite,
                   s.name AS status_name
            FROM trick t
            JOIN difficulty d ON t.difficulty = d.id
            JOIN category c   ON t.category   = c.id
            LEFT JOIN user_trick ut ON ut.trick = t.id AND ut.user = ?
            LEFT JOIN status s      ON s.id = ut.status
            WHERE 1=1";

    $params[] = $username;
    $types   .= "s";
}

// -------------------------------------------------------
// Gemeinsame Filter (gelten für beide)
// -------------------------------------------------------

// Suche nach Titel
if (!empty($search)) {
    $sql    .= " AND lower(t.titel) LIKE ?";
    $params[] = "%" . strtolower($search) . "%";
    $types   .= "s";
}

// Filter nach Schwierigkeit
if ($difficulty != 'all') {
    $sql    .= " AND lower(d.name) = ?";
    $params[] = $difficulty;
    $types   .= "s";
}

// Filter nach Kategorie
if ($category != 'all') {
    $sql    .= " AND lower(c.name) = ?";
    $params[] = $category;
    $types   .= "s";
}

// -------------------------------------------------------
// Vorliebe-Filter – nur wenn eingeloggt
// -------------------------------------------------------
if ($isLoggedIn && $preference != 'all') {
    if ($preference === 'favoriten') {
        $sql .= " AND ut.is_favorite = 'Y'";
    } else {
        // 'lernen' oder 'gemeistert' → in status Tabelle nachschauen
        $sql    .= " AND lower(s.name) = ?";
        $params[] = $preference;
        $types   .= "s";
    }
} else if ($preference != 'all') {
    // muss sich einloggen
    $_SESSION['filter']['preference'] = 'all'; # zu all sezten das man wieder zurück kommen kann
    header("Location: ./../pages/account.php");
    exit();
}

// -------------------------------------------------------
// Query ausführen
// -------------------------------------------------------
$stmt = $conn->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

$tricks = [];
while ($row = $result->fetch_assoc()) {
    $tricks[] = $row;
}
