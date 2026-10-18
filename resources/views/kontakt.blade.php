<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt – Bergsicht Software</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <a href="/">Bergsicht Software</a>
        <nav>
            <a href="/leistungen">Leistungen</a>
            <a href="/kontakt">Kontakt</a>
        </nav>
    </header>

    <main>
        <h1>Kontakt</h1>
        <p>Sie haben ein Projekt im Kopf? Schreiben Sie uns – wir melden uns innerhalb von einem Arbeitstag.</p>

        <section>
            <h2>So erreichen Sie uns</h2>

            <h3>Adresse</h3>
            <p>Bergsicht Software GmbH<br>Seestrasse 12<br>8000 Zürich</p>

            <h3>Telefon</h3>
            <p><a href="tel:+41440000000">+41 44 000 00 00</a></p>

            <h3>E-Mail</h3>
            <p><a href="mailto:hallo@bergsicht.example">hallo@bergsicht.example</a></p>

            <h3>Öffnungszeiten</h3>
            <p>Mo–Fr, 08:00–17:00</p>
        </section>

        <section>
            <h2>Nachricht senden</h2>

            <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">

                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email">

                <label for="betreff">Betreff</label>
                <select id="betreff" name="betreff">
                    <option>Neues Projekt</option>
                    <option>Bestehendes Projekt</option>
                    <option>Sonstiges</option>
                </select>

                <label for="nachricht">Nachricht</label>
                <textarea id="nachricht" name="nachricht" rows="5"></textarea>

                <input type="checkbox" id="datenschutz" name="datenschutz">
                <label for="datenschutz">Ich habe die Datenschutzerklärung gelesen.</label>

                <button type="submit">Nachricht senden</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2026 Bergsicht Software GmbH</p>
    </footer>
</body>
</html>
