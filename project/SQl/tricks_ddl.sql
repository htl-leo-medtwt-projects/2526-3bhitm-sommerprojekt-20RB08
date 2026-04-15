INSERT INTO trick (titel, created_at, description, difficulty, category) VALUES
('Ollie', '2024-06-22 00:00:00', 
'Der Ollie ist der fundamentalste Sprung im Snowboarden und bildet die Grundlage für nahezu jeden anderen Trick. Beim Ollie nutzt du die Flex des Boards, um ohne Kante oder Kicker in die Luft zu kommen. Du verlagerst dein Gewicht auf das Tail, lässt das Board durchfedern und ziehst das vordere Bein hoch, während du abspringst. Ein sauberer Ollie sieht mühelos aus – das Board liegt flach in der Luft, die Knie sind angezogen, der Oberkörper bleibt ruhig. Wer den Ollie wirklich beherrscht, hat das Fundament für Grabs, Rotationen und Jibs gelegt.', 
1, 1),

('Frontside 180', '2025-12-04 00:00:00', 
'Der Frontside 180 ist eine der ersten Rotationen, die Snowboarder lernen. Du drehst dich um 180 Grad in frontside-Richtung, also so, dass deine Brust zuerst zur Bergseite zeigt. Der Trick beginnt am Boden – du windest Schultern und Hüfte bereits vor dem Absprung in Drehrichtung an und entlässt diese Energie beim Abheben. In der Luft bleibt das Board idealer Weise flach, die Arme helfen beim Steuern der Rotation. Du landest switch, also mit dem anderen Fuß vorne. Für einen sauberen Frontside 180 brauchst du ein gutes Gespür für Timing und ein solides Grundverständnis fürs Switch-Fahren.', 
1, 2),

('Backside 180', '2026-01-15 00:00:00', 
'Der Backside 180 dreht sich in die entgegengesetzte Richtung zum Frontside 180 – dein Rücken zeigt zuerst zur Bergseite, was den Trick etwas kniffliger macht, da du die Landung kurzzeitig nicht siehst. Du windest den Oberkörper nach backside an, springst ab und lässt die Rotation kontrolliert fließen. Das Schwierige am Backside 180 ist das sogenannte "Blind Landing" – du musst deinen Kopf aktiv über die Schulter drehen, um die Landung rechtzeitig zu finden. Wer den Backside 180 sauber auf flachem Gelände und kleinen Kickern beherrscht, hat eine wichtige Basis für größere Backside-Rotationen wie den Backside 360.', 
1, 2),

('50-50 Grind', '2026-03-03 00:00:00', 
'Der 50-50 Grind ist der klassische Einstieg in die Welt des Jibbings. Du springst mit einem flachen Ollie auf ein Rail oder eine Box, sodass das Board mittig und parallel auf dem Feature aufliegt – beide Bindungen sind gleichmäßig belastet, daher der Name 50-50. Der Trick klingt simpel, erfordert aber präzises Anspringen, eine ruhige und zentrierte Körperhaltung auf dem Feature sowie einen kontrollierten Absprung am Ende. Boxen sind für Anfänger einfacher als Rails, da die breitere Fläche mehr Stabilität bietet. Ein sauberer 50-50 mit geradem Absprung und kontrollierter Landung ist die Grundlage für alle weiteren Jib-Tricks wie den Boardslide oder den Noseslide.', 
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