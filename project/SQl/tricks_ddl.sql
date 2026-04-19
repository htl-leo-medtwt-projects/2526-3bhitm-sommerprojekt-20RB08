INSERT INTO trick (titel, created_at, description, difficulty, category) VALUES
('Ollie', '2024-06-22 00:00:00',
'Der grundlegendste Sprung – Gewicht aufs Tail, Board federn lassen, abspringen. Basis für fast alle anderen Tricks.',
1, 1),

('Frontside 180', '2025-12-04 00:00:00',
'Eine 180-Grad-Rotation, bei der deine Brust zuerst zur Bergseite zeigt. Du windest Schultern und Hüfte vor dem Absprung an und landest switch.',
1, 2),

('Backside 180', '2026-01-15 00:00:00',
'Eine 180-Grad-Rotation, bei der dein Rücken zuerst zur Bergseite zeigt. Das Schwierige ist das Blind Landing – du musst den Kopf aktiv über die Schulter drehen, um die Landung zu finden.',
1, 2),

('50-50 Grind', '2026-03-03 00:00:00',
'Der klassische Einstieg ins Jibbing. Du springst mit einem Ollie auf ein Rail oder eine Box, das Board liegt mittig drauf. Beide Bindungen sind gleichmäßig belastet – daher der Name 50-50.',
1, 4);

INSERT INTO step (step_number, text, trick) VALUES
(1, 'Beginne in einer stabilen Position mit leicht gebeugten Knien.', 1),
(2, 'Verlagere dein Gewicht nach hinten und übe Druck auf das Tail aus, indem du leicht in die Hocke gehst.', 1),
(3, 'Strecke deine Beine schnell und springe nach oben, sodass sich zuerst die Nose des Boards anhebt.', 1),

(1, 'Starte mit einem soliden Ollie als Basis.', 2),
(2, 'Drehe Schultern und Hüfte in Fahrtrichtung (frontside) noch vor dem Absprung an.', 2),
(3, 'Führe die Rotation mit Blick über die Schulter durch und lande switch (rückwärts).', 2),

(1, 'Baue Geschwindigkeit auf und gehe leicht in die Knie für den Absprung.', 3),
(2, 'Drehe Schultern und Hüfte nach backside ein, kurz bevor du abspringst.', 3),
(3, 'Lass die Rotation fließen, suche die Landung mit den Augen und lande weich switch.', 3),

(1, 'Fahre gerade auf das Feature zu, leicht mehr Gewicht auf der Heel-Kante.', 4),
(2, 'Springe mit einem flachen Ollie auf das Rail, das Board liegt mittig drauf.', 4),
(3, 'Halte Gewicht zentriert, Knie leicht gebeugt, und fahre am Ende sauber ab.', 4);