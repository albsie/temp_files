<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
<header>
    <nav class="navbar custom_color">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 font_color_white">Students</span>
        </div>
    </nav>
</header>
<main class="container">
    <section id="input">
        <h3>gib hier den Schüler ein</h3>
        <form>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                    <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="name" name="name" class="form-control" aria-describedby="Max Mustermann">
                </div>
                <div class="col-auto">
                    <span id="nameHelpInline" class="form-text"></span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                    <label for="age" class="col-form-label">Alter</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="age" name="age" class="form-control" aria-describedby="Alter">
                </div>
                <div class="col-auto">
                    <span id="ageHelpInline" class="form-text"></span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                    <label for="residence" class="col-form-label">Wohnort</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="residence" name="residence" class="form-control" aria-describedby="Berlin">
                </div>
                <div class="col-auto">
                    <span id="residenceHelpInline" class="form-text"></span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                    <label for="subject" class="col-form-label">Fachrichtung</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="subject" name="subject" class="form-control" aria-describedby="Fachrichtung">
                </div>
                <div class="col-auto">
                    <span id="subjectHelpInline" class="form-text"></span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                    <label for="class" class="col-form-label">Klassenstufe</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="class" name="class" class="form-control" aria-describedby="Stufe">
                </div>
                <div class="col-auto">
                    <span id="classHelpInline" class="form-text"></span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-1">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">Speichern</button>
                </div>
                <div class="col-auto">
                    <span id="classHelpInline" class="form-text"></span>
                </div>
            </div>
        </form>
    </section>
    <section id="output">
        <h3>Alle Schüler</h3>
        <ul>
            <li><b>Name</b></li>
            <li><b>Alter</b></li>
            <li><b>Wohnort</b></li>
            <li><b>Fachrichtung</b></li>
            <li><b>Stufe</b></li>
            <li><b>Erstellt</b></li>
            <li><b>Löschen</b></li>
        </ul>
        <!-- loop here -->
        <!-- <button type="button" name="delete" value="" class="btn-close" aria-label="Close"></button> -->
        <!-- end loop here -->
    </section>
</main>
</body>
</html>
