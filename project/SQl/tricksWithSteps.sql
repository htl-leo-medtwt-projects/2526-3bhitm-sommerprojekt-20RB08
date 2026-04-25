-- --------------------------------------------------------
-- Neue Tricks
-- --------------------------------------------------------

INSERT INTO `trick` (`id`, `titel`, `created_at`, `description`, `difficulty`, `category`, `image_path`, `tip`, `tutorial_path`) VALUES
(5,  'Nollie',         '2026-04-25 00:00:00', 'Ollie von der Nose aus – Gewicht auf das vordere Bein verlagern und das Tail aktiv hochziehen. Spiegelbild des klassischen Ollies.', 1, 1, NULL, 'Drücke bewusst mit dem vorderen Fuß ab – es fühlt sich anfangs ungewohnt an, aber der Bewegungsablauf ist identisch mit dem Ollie, nur seitenverkehrt.', NULL),
(6,  'Nose Press',     '2026-04-25 00:00:00', 'Auf einer Box oder Flat das Gewicht auf die Nose verlagern, sodass das Tail in der Luft bleibt. Erstes Style-Element im Jibbing.', 1, 4, NULL, 'Halte die Arme ausgestreckt für Balance. Nicht zu weit nach vorne lehnen – das Board soll kontrolliert kippen, nicht unkontrolliert abfliegen.', NULL),
(7,  'Tail Press',     '2026-04-25 00:00:00', 'Gewicht aufs Tail drücken, Nose hebt ab. Klassischer Press auf Boxes oder flachem Gelände – wichtige Grundlage für spätere Press-Tricks.', 1, 4, NULL, 'Das hintere Knie tief beugen für mehr Kontrolle und einen länger gehaltenen Press.', NULL),
(8,  'Indy Grab',      '2026-04-25 00:00:00', 'Mit der hinteren Hand zwischen den Bindungen auf der Toeside-Kante greifen. Der klassischste und stylishste aller Grabs.', 2, 3, NULL, 'Ziehe das Board zu dir hoch statt dich zum Board zu bücken – das sieht stilvoller aus und ist technisch korrekter.', NULL),
(9,  'Mute Grab',      '2026-04-25 00:00:00', 'Mit der vorderen Hand auf der Toeside-Kante zwischen den Bindungen greifen. Erfordert guten Knie-Anzug und Körperkontrolle.', 2, 3, NULL, 'Knie weit anziehen und das Board aktiv hochziehen für einen sauberen, tiefen Grab.', NULL),
(10, 'Frontside 360',  '2026-04-25 00:00:00', 'Eine volle 360-Grad-Rotation frontside. Die Rotation muss aktiv gestoppt werden – Schultern und Hüfte müssen synchron arbeiten.', 2, 2, NULL, 'Starte die Rotation früh direkt beim Absprung und stoppe aktiv mit den Schultern in der Landephase.', NULL),
(11, 'Backside 360',   '2026-04-25 00:00:00', 'Eine volle 360-Grad-Rotation backside. Das Blind Landing im ersten Teil der Rotation macht diesen Trick schwieriger als den FS 360.', 2, 2, NULL, 'Schaue direkt nach dem Absprung über die vordere Schulter zurück – das hilft enorm beim Finden der Landezone.', NULL),
(12, 'Frontflip',      '2026-04-25 00:00:00', 'Salto vorwärts über die Nose des Boards. Benötigt viel Airtime, einen steilen Kicker und vorherige Erfahrung auf dem Trampolin.', 3, 5, NULL, 'Übe den Bewegungsablauf zuerst intensiv auf dem Trampolin. Der Kicker muss steil genug sein – flache Kicker reichen nicht aus.', NULL);

-- --------------------------------------------------------
-- Steps für die neuen Tricks
-- --------------------------------------------------------

INSERT INTO `step` (`id`, `step_number`, `text`, `trick`) VALUES

-- Nollie (trick 5) – 4 Steps
(13, 1, 'Stehe in deiner normalen Fahrposition und verlagere das Gewicht bewusst auf den vorderen Fuß.', 5),
(14, 2, 'Gehe leicht in die Knie und drücke die Nose aktiv ins Eis, ähnlich wie du beim Ollie das Tail drückst.', 5),
(15, 3, 'Strecke das vordere Bein explosiv und ziehe gleichzeitig den hinteren Fuß hoch, um das Tail anzuheben.', 5),
(16, 4, 'Gleiche das Board in der Luft aus und lande mit beiden Füßen gleichzeitig, Knie leicht gebeugt.', 5),

-- Nose Press (trick 6) – 5 Steps
(17, 1, 'Fahre mit gleichmäßiger, kontrollierter Geschwindigkeit auf die Box zu – nicht zu schnell.', 6),
(18, 2, 'Bereite einen flachen Ollie vor, indem du kurz vor der Box leicht in die Knie gehst.', 6),
(19, 3, 'Springe auf die Box und verlagere das Gewicht sofort zur Nose, sodass das Tail abhebt.', 6),
(20, 4, 'Halte den Blick auf das Ende der Box gerichtet, Arme seitlich ausgestreckt für Balance.', 6),
(21, 5, 'Am Ende der Box das Gewicht wieder zentrieren und kontrolliert abfahren oder abspringen.', 6),

-- Tail Press (trick 7) – 5 Steps
(22, 1, 'Fahre auf die Box zu und positioniere dich mit leicht mehr Gewicht auf dem hinteren Fuß.', 7),
(23, 2, 'Führe einen flachen Ollie aus und lande mit dem Schwerpunkt über dem Tail.', 7),
(24, 3, 'Beuge das hintere Knie tief und drücke das Tail aktiv nach unten, sodass die Nose in der Luft bleibt.', 7),
(25, 4, 'Stabilisiere den Press mit ausgestreckten Armen und halte die Körpermitte über dem hinteren Fuß.', 7),
(26, 5, 'Kurz vor dem Ende der Box Gewicht zentrieren und sauber abfahren.', 7),

-- Indy Grab (trick 8) – 5 Steps
(27, 1, 'Baue ausreichend Geschwindigkeit auf und fahre auf den Kicker zu.', 8),
(28, 2, 'Starte mit einem kräftigen Ollie und ziehe beide Knie gleichzeitig schnell an den Körper.', 8),
(29, 3, 'Greife mit der hinteren Hand auf die Toeside-Kante des Boards zwischen den Bindungen.', 8),
(30, 4, 'Halte den Grab bewusst für einen Moment – ein kurzer, sauberer Grab sieht besser aus als ein schneller Touch.', 8),
(31, 5, 'Lasse den Grab los, strecke die Beine aus und absorbiere die Landung mit gebeugten Knien.', 8),

-- Mute Grab (trick 9) – 5 Steps
(32, 1, 'Fahre mit guter Geschwindigkeit auf den Kicker zu und bereite einen kräftigen Absprung vor.', 9),
(33, 2, 'Springe ab und ziehe beide Knie aktiv und gleichmäßig hoch Richtung Brust.', 9),
(34, 3, 'Greife mit der vorderen Hand auf die Toeside-Kante zwischen den Bindungen – der Arm kreuzt dabei leicht den Körper.', 9),
(35, 4, 'Ziehe das Board aktiv zu dir hoch, anstatt dich zum Board hinunterzubeugen.', 9),
(36, 5, 'Grab loslassen, Board ausgleichen und weich mit gebeugten Knien landen.', 9),

-- Frontside 360 (trick 10) – 6 Steps
(37, 1, 'Fahre mit ausreichend Geschwindigkeit auf den Kicker zu – ein FS 360 braucht mehr Speed als ein 180.', 10),
(38, 2, 'Winde Schultern und Hüfte stark frontside ein, bevor du den Absprung einleitest.', 10),
(39, 3, 'Springe kräftig ab und leite die Rotation mit einem schwungvollen Drehen der Schultern ein.', 10),
(40, 4, 'Halte die Arme nah am Körper für eine schnellere Rotation, oder strecke sie aus um sie zu verlangsamen.', 10),
(41, 5, 'Nach 270 Grad die Landezone aktiv mit den Augen suchen und die Schultern stoppen.', 10),
(42, 6, 'Weich landen, Knie tief beugen und den Schwung kontrolliert ausfahren.', 10),

-- Backside 360 (trick 11) – 6 Steps
(43, 1, 'Fahre mit gutem Tempo auf den Kicker – mehr Speed gibt mehr Zeit für die Rotation.', 11),
(44, 2, 'Winde Schultern und Hüfte backside ein, Blick geht zuerst bergab.', 11),
(45, 3, 'Springe ab und leite die Rotation sofort mit den Schultern ein.', 11),
(46, 4, 'Direkt nach dem Absprung den Kopf über die vordere Schulter zurückdrehen, um die Landezone nicht zu verlieren.', 11),
(47, 5, 'Arme nah am Körper halten für Rotationsgeschwindigkeit, nach 270 Grad öffnen zum Bremsen.', 11),
(48, 6, 'Landung absorbieren, Knie gebeugt – du endest in normaler Fahrtrichtung.', 11),

-- Frontflip (trick 12) – 6 Steps
(49, 1, 'Übe den Bewegungsablauf ausgiebig auf einem Trampolin, bevor du es auf Schnee versuchst.', 12),
(50, 2, 'Fahre mit deutlich mehr Geschwindigkeit als bei normalen Tricks auf einen steilen Kicker zu.', 12),
(51, 3, 'Drücke beim Absprung die Nose aktiv nach unten und wirf Kopf und Oberkörper nach vorne in die Rotation.', 12),
(52, 4, 'Knie an die Brust ziehen, um die Rotation zu beschleunigen – gestreckter Körper dreht langsamer.', 12),
(53, 5, 'Nach etwa drei Vierteln der Rotation die Landezone aktiv mit den Augen suchen.', 12),
(54, 6, 'Beine rechtzeitig durchstrecken und mit beiden Füßen gleichzeitig weich landen, Knie tief gebeugt.', 12);