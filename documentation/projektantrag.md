# Steal My Settings | STMS 📷
Social Platform for Reproducible Photography

---

## USP (Unique Selling Proposition)

**STMS** ist eine spezialisierte Social-Media-Plattform für Fotographen, auf der Bilder nicht nur geteilt, sondern technisch nachvollziehbar gemacht werden.

Jeder Beitrag enthält:

1. Eine bearbeitete Version des Fotos (Edited)
2. Optional eine RAW-Datei oder das Originalbild
3. Strukturierte Aufnahmeparameter (ISO, Blende, Verschlusszeit, Brennweite, Kamera, Objektiv)
4. Optional Bearbeitungshinweise oder Preset-Informationen

Im Gegensatz zu klassischen Plattformen steht nicht die reine Präsentation im Vordergrund, sondern die **Reproduzierbarkeit fotografischer Ergebnisse**.

---

## UI & UX

### Zielgruppe
Hobby- und Profi-Fotograf:innen, die voneinander lernen und ihre technischen Einstellungen teilen möchten.

---

### Hauptfunktionen

#### Registrierung & Login
Der User kann ein Konto erstellen, um Beiträge zu veröffentlichen, Likes zu vergeben und Kommentare zu schreiben. Zusätzlich erhält jeder User eine eigene Profilseite.

---

#### Feed
Die Startseite ist ähnlich aufgebaut wie ein moderner Social-Media-Feed (eine fyp). Beiträge werden in einem übersichtlichen Grid dargestellt. User können Beiträge liken, kommentieren und die Profile anderer Notzer ansehen.

---

#### Post erstellen
Beim Erstellen eines Posts werden Bilder hochgeladen sowie die wichtigsten technischen Daten eingegeben, zum Beispiel:

- Kamera
- ISO
- Blende (f/)
- Verschlusszeit
- Brennweite

Diese Informationen werden strukturiert in der Datenbank gespeichert.

---

#### Profil
Auf der Profilseite sieht man eine Übersicht aller Beiträge eines Users sowie dessen Profilinformationen.

---

## Code Plan

### Frontend
Das Frontend wird mit folgenden Technologien entwickelt:

- HTML
- CSS
- JavaScript

---

### Backend & Datenbank
Das Backend wird umgesetzt mit:

- PHP
- MySQL
- phpMyAdmin

Die Anwendung ist stark datenbankbasiert aufgebaut. Die Datenbank wird relational strukturiert und enthält unter anderem folgende Tabellen:

- **users**
- **posts**
- **shot_settings**
- **comments**
- **likes**
- **follows**

Die Tabellen stehen über Primär- und Fremdschlüssel miteinander in Beziehung.

---

## Zusammenfassung

STMS ist eine Webplattform für Fotographen, die nicht nur Inspiration suchen. Der Fokus liegt auf dem technischem Austausch und reproduzierbarer der Fotografie.