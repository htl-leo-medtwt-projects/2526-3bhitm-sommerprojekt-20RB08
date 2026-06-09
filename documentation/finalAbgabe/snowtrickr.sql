-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Erstellungszeit: 09. Jun 2026 um 14:14
-- Server-Version: 8.4.8
-- PHP-Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `snowtrickr`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Grundlagen', 'Basis Snowboard Tricks für Anfänger'),
(2, 'Rotationen', 'Tricks mit Drehungen in der Luft'),
(3, 'Grabs', 'Tricks bei denen das Board gegriffen wird'),
(4, 'Jibbing', 'Tricks auf Rails und Boxen'),
(5, 'Flips', 'Salto Tricks');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `difficulty`
--

CREATE TABLE `difficulty` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `difficulty`
--

INSERT INTO `difficulty` (`id`, `name`, `description`) VALUES
(1, 'Anfänger', 'Einfacher Trick für Einsteiger'),
(2, 'Fortgeschritten', 'Mittlerer Schwierigkeitsgrad'),
(3, 'Experte', 'Sehr schwieriger Trick');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `status`
--

INSERT INTO `status` (`id`, `name`, `description`) VALUES
(1, 'Nichts', 'Keine der zwei sachen wurde ausgewählt'),
(2, 'Lernen', 'Der Trick wird aktuell geübt'),
(3, 'Gemeistert', 'Der Trick wurde erfolgreich gelernt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `step`
--

CREATE TABLE `step` (
  `id` int NOT NULL,
  `step_number` int NOT NULL,
  `text` varchar(255) NOT NULL,
  `trick` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `step`
--

INSERT INTO `step` (`id`, `step_number`, `text`, `trick`) VALUES
(1, 1, 'Beginne in einer stabilen Position mit leicht gebeugten Knien.', 1),
(2, 2, 'Verlagere dein Gewicht nach hinten und übe Druck auf das Tail aus, indem du leicht in die Hocke gehst.', 1),
(3, 3, 'Strecke deine Beine schnell und springe nach oben, sodass sich zuerst die Nose des Boards anhebt.', 1),
(4, 1, 'Starte mit einem soliden Ollie als Basis.', 2),
(5, 2, 'Drehe Schultern und Hüfte in Fahrtrichtung (frontside) noch vor dem Absprung an.', 2),
(6, 3, 'Führe die Rotation mit Blick über die Schulter durch und lande switch (rückwärts).', 2),
(7, 1, 'Baue Geschwindigkeit auf und gehe leicht in die Knie für den Absprung.', 3),
(8, 2, 'Drehe Schultern und Hüfte nach backside ein, kurz bevor du abspringst.', 3),
(9, 3, 'Lass die Rotation fließen, suche die Landung mit den Augen und lande weich switch.', 3),
(10, 1, 'Fahre gerade auf das Feature zu, leicht mehr Gewicht auf der Heel-Kante.', 4),
(11, 2, 'Springe mit einem flachen Ollie auf das Rail, das Board liegt mittig drauf.', 4),
(12, 3, 'Halte Gewicht zentriert, Knie leicht gebeugt, und fahre am Ende sauber ab.', 4),
(13, 1, 'Stehe in deiner normalen Fahrposition und verlagere das Gewicht bewusst auf den vorderen Fuß.', 5),
(14, 2, 'Gehe leicht in die Knie und drücke die Nose aktiv ins Eis, ähnlich wie du beim Ollie das Tail drückst.', 5),
(15, 3, 'Strecke das vordere Bein explosiv und ziehe gleichzeitig den hinteren Fuß hoch, um das Tail anzuheben.', 5),
(16, 4, 'Gleiche das Board in der Luft aus und lande mit beiden Füßen gleichzeitig, Knie leicht gebeugt.', 5),
(17, 1, 'Fahre mit gleichmäßiger, kontrollierter Geschwindigkeit auf die Box zu – nicht zu schnell.', 6),
(18, 2, 'Bereite einen flachen Ollie vor, indem du kurz vor der Box leicht in die Knie gehst.', 6),
(19, 3, 'Springe auf die Box und verlagere das Gewicht sofort zur Nose, sodass das Tail abhebt.', 6),
(20, 4, 'Halte den Blick auf das Ende der Box gerichtet, Arme seitlich ausgestreckt für Balance.', 6),
(21, 5, 'Am Ende der Box das Gewicht wieder zentrieren und kontrolliert abfahren oder abspringen.', 6),
(22, 1, 'Fahre auf die Box zu und positioniere dich mit leicht mehr Gewicht auf dem hinteren Fuß.', 7),
(23, 2, 'Führe einen flachen Ollie aus und lande mit dem Schwerpunkt über dem Tail.', 7),
(24, 3, 'Beuge das hintere Knie tief und drücke das Tail aktiv nach unten, sodass die Nose in der Luft bleibt.', 7),
(25, 4, 'Stabilisiere den Press mit ausgestreckten Armen und halte die Körpermitte über dem hinteren Fuß.', 7),
(26, 5, 'Kurz vor dem Ende der Box Gewicht zentrieren und sauber abfahren.', 7),
(27, 1, 'Baue ausreichend Geschwindigkeit auf und fahre auf den Kicker zu.', 8),
(28, 2, 'Starte mit einem kräftigen Ollie und ziehe beide Knie gleichzeitig schnell an den Körper.', 8),
(29, 3, 'Greife mit der hinteren Hand auf die Toeside-Kante des Boards zwischen den Bindungen.', 8),
(30, 4, 'Halte den Grab bewusst für einen Moment – ein kurzer, sauberer Grab sieht besser aus als ein schneller Touch.', 8),
(31, 5, 'Lasse den Grab los, strecke die Beine aus und absorbiere die Landung mit gebeugten Knien.', 8),
(32, 1, 'Fahre mit guter Geschwindigkeit auf den Kicker zu und bereite einen kräftigen Absprung vor.', 9),
(33, 2, 'Springe ab und ziehe beide Knie aktiv und gleichmäßig hoch Richtung Brust.', 9),
(34, 3, 'Greife mit der vorderen Hand auf die Toeside-Kante zwischen den Bindungen – der Arm kreuzt dabei leicht den Körper.', 9),
(35, 4, 'Ziehe das Board aktiv zu dir hoch, anstatt dich zum Board hinunterzubeugen.', 9),
(36, 5, 'Grab loslassen, Board ausgleichen und weich mit gebeugten Knien landen.', 9),
(37, 1, 'Fahre mit ausreichend Geschwindigkeit auf den Kicker zu – ein FS 360 braucht mehr Speed als ein 180.', 10),
(38, 2, 'Winde Schultern und Hüfte stark frontside ein, bevor du den Absprung einleitest.', 10),
(39, 3, 'Springe kräftig ab und leite die Rotation mit einem schwungvollen Drehen der Schultern ein.', 10),
(40, 4, 'Halte die Arme nah am Körper für eine schnellere Rotation, oder strecke sie aus um sie zu verlangsamen.', 10),
(41, 5, 'Nach 270 Grad die Landezone aktiv mit den Augen suchen und die Schultern stoppen.', 10),
(42, 6, 'Weich landen, Knie tief beugen und den Schwung kontrolliert ausfahren.', 10),
(43, 1, 'Fahre mit gutem Tempo auf den Kicker – mehr Speed gibt mehr Zeit für die Rotation.', 11),
(44, 2, 'Winde Schultern und Hüfte backside ein, Blick geht zuerst bergab.', 11),
(45, 3, 'Springe ab und leite die Rotation sofort mit den Schultern ein.', 11),
(46, 4, 'Direkt nach dem Absprung den Kopf über die vordere Schulter zurückdrehen, um die Landezone nicht zu verlieren.', 11),
(47, 5, 'Arme nah am Körper halten für Rotationsgeschwindigkeit, nach 270 Grad öffnen zum Bremsen.', 11),
(48, 6, 'Landung absorbieren, Knie gebeugt – du endest in normaler Fahrtrichtung.', 11),
(49, 1, 'Übe den Bewegungsablauf ausgiebig auf einem Trampolin, bevor du es auf Schnee versuchst.', 12),
(50, 2, 'Fahre mit deutlich mehr Geschwindigkeit als bei normalen Tricks auf einen steilen Kicker zu.', 12),
(51, 3, 'Drücke beim Absprung die Nose aktiv nach unten und wirf Kopf und Oberkörper nach vorne in die Rotation.', 12),
(52, 4, 'Knie an die Brust ziehen, um die Rotation zu beschleunigen – gestreckter Körper dreht langsamer.', 12),
(53, 5, 'Nach etwa drei Vierteln der Rotation die Landezone aktiv mit den Augen suchen.', 12),
(54, 6, 'Beine rechtzeitig durchstrecken und mit beiden Füßen gleichzeitig weich landen, Knie tief gebeugt.', 12);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trick`
--

CREATE TABLE `trick` (
  `id` int NOT NULL,
  `titel` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `difficulty` int DEFAULT NULL,
  `category` int DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `tip` text,
  `tutorial_path` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `trick`
--

INSERT INTO `trick` (`id`, `titel`, `created_at`, `description`, `difficulty`, `category`, `image_path`, `tip`, `tutorial_path`) VALUES
(1, 'Ollie', '2024-06-22 00:00:00', 'Der grundlegendste Sprung – Gewicht aufs Tail, Board federn lassen, abspringen. Basis für fast alle anderen Tricks.\r\n\r\n', 1, 1, 'tricks/ollie.avif', 'Drücke zuerst mit dem hinteren Fuß das Tail ins Eis, dann ziehe den vorderen Fuß hoch und spring gleichzeitig ab — der Schwung kommt aus dem Tail, nicht aus den Beinen.', 'tutorial/ollie.png'),
(2, 'Frontside 180', '2025-12-04 00:00:00', 'Eine 180-Grad-Rotation, bei der deine Brust zuerst zur Bergseite zeigt. Du windest Schultern und Hüfte vor dem Absprung an und landest switch.', 1, 2, 'tricks/frontside180.avif', 'Dreh zuerst die Schultern in Fahrtrichtung – der Rest des Körpers folgt automatisch. Beim Landen switch unbedingt den Kopf über die vordere Schulter drehen, um die Landezone rechtzeitig zu sehen.', NULL),
(3, 'Backside 180', '2026-01-15 00:00:00', 'Eine 180-Grad-Rotation, bei der dein Rücken zuerst zur Bergseite zeigt. Das Schwierige ist das Blind Landing – du musst den Kopf aktiv über die Schulter drehen, um die Landung zu finden.', 1, 2, 'tricks/backside180.avif', 'Das Blind Landing ist die größte Herausforderung – suche aktiv mit den Augen über die hintere Schulter nach der Landezone. Übe zuerst auf flachem Gelände und drehe bewusst langsamer, damit du mehr Zeit hast, dich zu orientieren.\r\n\r\n', NULL),
(4, '50-50 Grind', '2026-03-03 00:00:00', 'Der klassische Einstieg ins Jibbing. Du springst mit einem Ollie auf ein Rail oder eine Box, das Board liegt mittig drauf. Beide Bindungen sind gleichmäßig belastet – daher der Name 50-50.', 1, 4, 'tricks/5050Grind.avif', 'Halte den Blick auf das Ende des Rails gerichtet, nicht auf deine Füße. Gleichmäßiges Tempo ist wichtiger als Geschwindigkeit – lieber langsam und kontrolliert als schnell und unkontrolliert.', NULL),
(5, 'Nollie', '2026-04-25 00:00:00', 'Ollie von der Nose aus – Gewicht auf das vordere Bein verlagern und das Tail aktiv hochziehen. Spiegelbild des klassischen Ollies.', 1, 1, 'tricks/nollie.webp', 'Drücke bewusst mit dem vorderen Fuß ab – es fühlt sich anfangs ungewohnt an, aber der Bewegungsablauf ist identisch mit dem Ollie, nur seitenverkehrt.', NULL),
(6, 'Nose Press', '2026-04-25 00:00:00', 'Auf einer Box oder Flat das Gewicht auf die Nose verlagern, sodass das Tail in der Luft bleibt. Erstes Style-Element im Jibbing.', 1, 4, 'tricks/nosePress.webp', 'Halte die Arme ausgestreckt für Balance. Nicht zu weit nach vorne lehnen – das Board soll kontrolliert kippen, nicht unkontrolliert abfliegen.', NULL),
(7, 'Tail Press', '2026-04-25 00:00:00', 'Gewicht aufs Tail drücken, Nose hebt ab. Klassischer Press auf Boxes oder flachem Gelände – wichtige Grundlage für spätere Press-Tricks.', 1, 4, 'tricks/tailpress.jpg', 'Das hintere Knie tief beugen für mehr Kontrolle und einen länger gehaltenen Press.', NULL),
(8, 'Indy Grab', '2026-04-25 00:00:00', 'Mit der hinteren Hand zwischen den Bindungen auf der Toeside-Kante greifen. Der klassischste und stylishste aller Grabs.', 2, 3, 'tricks/indyGrab.avif', 'Ziehe das Board zu dir hoch statt dich zum Board zu bücken – das sieht stilvoller aus und ist technisch korrekter.', NULL),
(9, 'Mute Grab', '2026-04-25 00:00:00', 'Mit der vorderen Hand auf der Toeside-Kante zwischen den Bindungen greifen. Erfordert guten Knie-Anzug und Körperkontrolle.', 2, 3, 'tricks/muteGrab.jpg', 'Knie weit anziehen und das Board aktiv hochziehen für einen sauberen, tiefen Grab.', NULL),
(10, 'Frontside 360', '2026-04-25 00:00:00', 'Eine volle 360-Grad-Rotation frontside. Die Rotation muss aktiv gestoppt werden – Schultern und Hüfte müssen synchron arbeiten.', 2, 2, 'tricks/frontside360.jpg', 'Starte die Rotation früh direkt beim Absprung und stoppe aktiv mit den Schultern in der Landephase.', NULL),
(11, 'Backside 360', '2026-04-25 00:00:00', 'Eine volle 360-Grad-Rotation backside. Das Blind Landing im ersten Teil der Rotation macht diesen Trick schwieriger als den FS 360.', 2, 2, 'tricks/carven.avif', 'Schaue direkt nach dem Absprung über die vordere Schulter zurück – das hilft enorm beim Finden der Landezone.', NULL),
(12, 'Frontflip', '2026-04-25 00:00:00', 'Salto vorwärts über die Nose des Boards. Benötigt viel Airtime, einen steilen Kicker und vorherige Erfahrung auf dem Trampolin.', 3, 5, 'tricks/frontflip.jpeg', 'Übe den Bewegungsablauf zuerst intensiv auf dem Trampolin. Der Kicker muss steil genug sein – flache Kicker reichen nicht aus.', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `created_at`) VALUES
('123', 'test@tes.cpm', '$2y$10$yc5N0KYVP30PDIc9xbCoKurrUGWMAHogGK0Od9TLlW/A/4uhRNv4G', '2026-05-06 07:25:27'),
('carla.hoid', 'c.dimmler@students.htl-leonding.ac.at', '$2y$10$jBpf.x/qKyzph1kdoXi9AuysY5Z8QDFKZNTAAfRpay0DWiKz.KrtO', '2026-05-26 12:13:20'),
('ChrisiN', 'chrisi@gmail.com', '$2y$10$vqdhHeTECBv7ds7wN963E.uP9VwKirW9LqaMgwyprULXXAZV9SvEO', '2026-06-09 13:42:38'),
('fortnitekid67', 'roland@gmail.com', '$2y$10$sbyNKNpm7l67QbAxUCI4AOa0et2Z7Ff1kHOt.CuYsINUyslp/KdSa', '2026-05-05 07:49:13'),
('mike ocklong', 'asdgkda@gmail.com', '$2y$10$QnAyudnK4QOn83AO.4gfauzaZRSpeWJuNHURGIcO6j7E.WLddGNRC', '2026-05-08 07:50:20'),
('RolanB', 'roland@gmail.com', '$2y$10$OdxKCJgDWu0irPtPJXFeY.rGXy6hFUu2T9cENJQJGc06N4knvsD5G', '2026-06-09 13:41:26'),
('roli.edr', 'roland@gmail.com', '$2y$10$JQVM1Nxr9MMvcCL7F7nHOeug9sQedWoKZypRXF5vtHDEIid5lM2zu', '2026-05-03 15:02:59'),
('Sigma123', 'leckMoch@mArsch.Dih', '$2y$10$WxndRiH3L4hf.ohMQUtGR.OlHwy00OrYIqsEPRsLX.6/GbMYr4iTi', '2026-05-05 07:54:54'),
('test', 'test@test.com', '$2y$10$lFNLrI/3TkaoWSmIw9LbMe1cKjExI7MMHC6sw/feeNyYP3A4/spSq', '2026-05-03 15:25:36'),
('Togaforus', 'tobi@pay.reder', '$2y$10$dsFJevc8sC7YBRuNavz.VOtJ/akm6m9biwCWFBCzUUViVacOiHsfG', '2026-05-05 05:52:40'),
('yionees', 'salvator@lackle.yml', '$2y$10$fSz5juu2bAGVViB6oqmv4.Ltw.yzoa3j529VSzpzNghS8lhyqWcWG', '2026-05-03 15:07:38');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_trick`
--

CREATE TABLE `user_trick` (
  `user` varchar(30) NOT NULL,
  `trick` int NOT NULL,
  `is_favorite` char(1) NOT NULL,
  `status` int DEFAULT NULL,
  `lastchanged` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `user_trick`
--

INSERT INTO `user_trick` (`user`, `trick`, `is_favorite`, `status`, `lastchanged`) VALUES
('carla.hoid', 1, 'Y', 1, '2026-05-26 12:13:41'),
('ChrisiN', 1, 'Y', 3, '2026-06-09 13:56:52'),
('ChrisiN', 2, 'Y', 1, '2026-06-09 13:55:25'),
('ChrisiN', 3, 'Y', 2, '2026-06-09 13:43:44'),
('ChrisiN', 4, 'N', 3, '2026-06-09 13:55:34'),
('ChrisiN', 5, 'N', 3, '2026-06-09 13:43:36'),
('ChrisiN', 6, 'Y', 1, '2026-06-09 13:56:29'),
('ChrisiN', 12, 'N', 3, '2026-06-09 13:54:02'),
('test', 2, 'Y', 3, '2026-06-02 06:53:56'),
('test', 6, 'N', 2, '2026-06-02 07:19:03'),
('test', 7, 'Y', 2, '2026-05-25 13:36:11'),
('test', 11, 'Y', 2, '2026-05-26 07:01:33');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trick` (`trick`);

--
-- Indizes für die Tabelle `trick`
--
ALTER TABLE `trick`
  ADD PRIMARY KEY (`id`),
  ADD KEY `difficulty` (`difficulty`),
  ADD KEY `category` (`category`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indizes für die Tabelle `user_trick`
--
ALTER TABLE `user_trick`
  ADD PRIMARY KEY (`user`,`trick`),
  ADD KEY `trick` (`trick`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `step`
--
ALTER TABLE `step`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT für Tabelle `trick`
--
ALTER TABLE `trick`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `step_ibfk_1` FOREIGN KEY (`trick`) REFERENCES `trick` (`id`);

--
-- Constraints der Tabelle `trick`
--
ALTER TABLE `trick`
  ADD CONSTRAINT `trick_ibfk_1` FOREIGN KEY (`difficulty`) REFERENCES `difficulty` (`id`),
  ADD CONSTRAINT `trick_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints der Tabelle `user_trick`
--
ALTER TABLE `user_trick`
  ADD CONSTRAINT `user_trick_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `user_trick_ibfk_2` FOREIGN KEY (`trick`) REFERENCES `trick` (`id`),
  ADD CONSTRAINT `user_trick_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
