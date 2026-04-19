<?php 
/******************
 *  FILTER
 *****************/
if (!isset($_SESSION['filter'])) {
    $_SESSION['filter'] = [
        'search'        => '',
        'difficulty'    => 'all',
        'category'      => 'all',
        'preference'    => 'all'
    ];
}
// get?
# search
if (isset($_GET['search'])){
    $_SESSION['filter']['search'] = $_GET['search'];
}

#schwierikeit
if (isset($_GET['difficulty'])){
    $_SESSION['filter']['difficulty'] = $_GET['difficulty'];
}

#kategorie
if (isset($_GET['category'])){
    $_SESSION['filter']['category'] = $_GET['category'];
}

#vorliebe
if (isset($_GET['preference'])){
    $_SESSION['filter']['preference'] = $_GET['preference'];
}
