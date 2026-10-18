# 01 – Blade & Tailwind

**KI erlaubt:** Nein. Nutze die offizielle Doku:
- Blade: https://laravel.com/docs/blade
- Tailwind CSS: https://tailwindcss.com/docs

**Zeit:** ca. 2–3 Stunden

## Ausgangslage

Unsere Firma *Bergsicht Software* braucht eine neue Website. Es gibt bereits zwei Seiten mit Inhalt, aber ohne jedes Design:

- http://01-blade-tailwind.test/kontakt → `resources/views/kontakt.blade.php`
- http://01-blade-tailwind.test/leistungen → `resources/views/leistungen.blade.php`

Im Ordner `vorlage/` findest du Screenshots, wie die Seiten aussehen sollen.

## Starten

```bash
composer run setup   # nur beim ersten Mal
npm run dev          # Vite: baut CSS/JS bei jeder Änderung neu
```

Dann http://01-blade-tailwind.test im Browser öffnen (Herd).

---

## Aufgabe 1.1 – Layout-Komponente

Beide Seiten haben denselben Header und Footer. Der Code ist doppelt vorhanden.

- Erstelle eine **Blade-Komponente** `<x-layout>`, die das HTML-Grundgerüst, den Header und den Footer enthält.
- Beide Seiten sollen diese Komponente verwenden. Header- und Footer-Code darf danach nur noch **an einer Stelle** existieren.
- Der Seitentitel (`<title>`) soll pro Seite unterschiedlich sein, z.B. `Kontakt – Bergsicht Software`.

**Fertig, wenn:** Beide Seiten funktionieren gleich wie vorher, aber ohne doppelten Code.

## Aufgabe 1.2 – Design nach Vorlage (Desktop)

Style beide Seiten mit Tailwind so, dass sie aussehen wie `vorlage/kontakt-desktop.png` und `vorlage/leistungen-desktop.png`.

- Es muss nicht pixelgenau sein, aber Aufbau, Abstände und Farben sollen stimmen.
- Der aktive Menüpunkt im Header ist hervorgehoben (grün).

## Aufgabe 1.3 – Responsive (Mobile)

Die Seiten sollen auch auf dem Handy gut aussehen, siehe `vorlage/*-mobile.png`.

- Auf kleinen Bildschirmen stehen die Boxen untereinander.
- Der Button „Nachricht senden“ ist auf Mobile so breit wie das Formular.
- Teste mit den Entwicklertools im Browser (Gerätemodus).

---

## Zusatzaufgaben (falls du schneller fertig bist)

- **Dark Mode:** Die Seite passt sich an, wenn das Betriebssystem auf dunkel eingestellt ist.
- **Wiederverwendbare Komponenten:** Erstelle z.B. `<x-card>` oder `<x-input>`, damit der Formular-Code kürzer wird.

## Abgabe

Committe deine Arbeit mit Git (`git add . && git commit -m "..."`) und erkläre uns kurz:
1. Wie funktioniert deine Layout-Komponente?
2. Wie hast du das Responsive-Verhalten umgesetzt?
3. Was war schwierig?
