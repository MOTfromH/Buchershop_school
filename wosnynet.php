

<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wosny.net</title>
    <!-- Bootstrap CSS einbinden -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> <!-- Einbindung der externen CSS-Datei -->
    <!--<link rel="stylesheet" href="/Buchershop/css/bootstrap.css">-->

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Wosny.net</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <!-- Hier können Ihre Kategorien als Links eingefügt werden -->
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Titel, Autor*in, Stichwort, ISBN" aria-label="Suchen">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Suchen</button>
        </form>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#" id="loginLink"><i class="fas fa-sign-in-alt"></i> Anmelden</a> <!-- Hinzugefügter Anmeldungs-Link -->
            <a class="nav-item nav-link" href="#"><i class="fas fa-user"></i> Mein Konto</a>
            <a class="nav-item nav-link" href="#"><i class="fas fa-heart"></i> Merkzettel</a>
            <a class="nav-item nav-link" href="#"><i class="fas fa-shopping-cart"></i> Warenkorb</a>
        </div>
    </div>
</nav>
<!-- Anmelden Fenster -->
<div id="loginModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Anmelden</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Schließen">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="wosnynet.html" method="POST">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="userType" id="customerType" value="customer" checked>
                        <label class="form-check-label" for="customerType">Kunde</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="userType" id="businessType" value="business">
                        <label class="form-check-label" for="businessType">Unternehmen</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="emailInput" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Passwort">
                    </div>
                    <button type="submit" class="btn btn-primary">Anmelden</button>
                </form>
            </div>
            <div class="modal-footer">
                <span>Ich möchte ein Konto anlegen</span>
                <button type="button" class="btn btn-secondary">Konto anlegen</button>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <!-- Tabs für Hauptkategorien -->
    <ul class="nav nav-tabs" id="categoryTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="fiktion-tab" data-toggle="tab" href="#fiktion" role="tab" aria-controls="fiktion" aria-selected="true">Fotografie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sachbuch-tab" data-toggle="tab" href="#sachbuch" role="tab" aria-controls="sachbuch" aria-selected="false">Grafik & Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="poesie-tab" data-toggle="tab" href="#poesie" role="tab" aria-controls="poesie" aria-selected="false">Computer & Office</a>
        </li>
        <!-- Weitere Hauptkategorien hier hinzufügen -->
        <li class="nav-item">
            <a class="nav-link" id="kinder-tab" data-toggle="tab" href="#kinder" role="tab" aria-controls="kinder" aria-selected="false">Professional Computing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bildung-tab" data-toggle="tab" href="#bildung" role="tab" aria-controls="bildung" aria-selected="false">Online-Marketing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="religion-tab" data-toggle="tab" href="#religion" role="tab" aria-controls="religion" aria-selected="false">SAP</a>
        </li>
    </ul>

    <!-- Inhalt für jede Hauptkategorie -->
    <div class="tab-content" id="myTabContent">
        <!-- Fiktion -->
        <div class="tab-pane fade show active" id="fiktion" role="tabpanel" aria-labelledby="fiktion-tab">
            <!-- Akkordeon für Fiktion-Unterkategorien -->
            <div class="accordion" id="accordionFiktion">
                <!-- Detailansicht für jede Unterkategorie (z.B. Roman, Kurzgeschichte) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingRoman">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseRoman" aria-expanded="true" aria-controls="collapseRoman">
                                Zu Fotografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseRoman" class="collapse" aria-labelledby="headingRoman" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Fotografie.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Fiktion hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingKurzgeschichte">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseKurzgeschichte" aria-expanded="true" aria-controls="collapseKurzgeschichte">
                                Fotografieren lernen
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKurzgeschichte" class="collapse" aria-labelledby="headingKurzgeschichte" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fotografieren lernen.
                        </div>
                    </div>
                </div><!-- Kurzgeschichte -->
                <div class="card">
                    <div class="card-header" id="headingNovelle">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNovelle" aria-expanded="true" aria-controls="collapseNovelle">
                                Fototechnik
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNovelle" class="collapse" aria-labelledby="headingNovelle" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fototechnik.
                        </div>
                    </div>
                </div><!-- Fototechnik -->
                <div class="card">
                    <div class="card-header" id="headingFantasy">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFantasy" aria-expanded="true" aria-controls="collapseFantasy">
                                Fotogenres
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFantasy" class="collapse" aria-labelledby="headingFantasy" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fotogenres.
                        </div>
                    </div>
                </div><!--Fotogenres -->
                <div class="card">
                    <div class="card-header" id="headingsciencefiction">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsesciencefiction" aria-expanded="true" aria-controls="collapsesciencefiction">
                                Kamerahandbücher
                            </button>
                        </h2>
                    </div>
                    <div id="collapsesciencefiction" class="collapse" aria-labelledby="headingsciencefiction" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Kamerahandbücher.
                        </div>
                    </div>
                </div><!--Kamerahandbücher-->
                <div class="card">
                    <div class="card-header" id="headingHorror">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseHorror" aria-expanded="true" aria-controls="collapseHorror">
                                Professionelle Fotografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseHorror" class="collapse" aria-labelledby="headingHorror" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Professionelle Fotografie.
                        </div>
                    </div>
                </div><!--Professionelle Fotografie-->
                <div class="card">
                    <div class="card-header" id="headingThriller">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThriller" aria-expanded="true" aria-controls="collapseThriller">
                                Fotobearbeitung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThriller" class="collapse" aria-labelledby="headingThriller" data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fotobearbeitung.
                        </div>
                    </div>
                </div><!--Fotobearbeitung-->
            </div>
        </div>
        <!-- Sachbuch -->
        <div class="tab-pane fade" id="sachbuch" role="tabpanel" aria-labelledby="sachbuch-tab">
            <!-- Akkordeon für Sachbuch-Unterkategorien -->
            <div class="accordion" id="accordionSachbuch">
                <!-- Detailansicht für jede Unterkategorie (z.B. Biografie/Autobiografie) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingBiografie">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseBiografie" aria-expanded="false" aria-controls="collapseBiografie">
                                Zu Grafik & Design
                            </button>
                        </h2>
                    </div>
                    <div id="collapseBiografie" class="collapse" aria-labelledby="headingBiografie" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Grafik & Design.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Sachbuch hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingGeschichte">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseGeschichte" aria-expanded="false" aria-controls="collapseGeschichte">
                                Grafikprogramme
                            </button>
                        </h2>
                    </div>
                    <div id="collapseGeschichte" class="collapse" aria-labelledby="headingGeschichte" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Grafikprogramme.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingWissenschaft">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseWissenschaft" aria-expanded="false" aria-controls="collapseWissenschaft">
                                Illustration
                            </button>
                        </h2>
                    </div>
                    <div id="collapseWissenschaft" class="collapse" aria-labelledby="headingWissenschaft" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Illustration.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSelbsthilfe">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSelbsthilfe" aria-expanded="false" aria-controls="collapseSelbsthilfe">
                                Layout und Typografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSelbsthilfe" class="collapse" aria-labelledby="headingSelbsthilfe" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Layout und Typografie.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingReise">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseReise" aria-expanded="false" aria-controls="collapseReise">
                                Kommunikationsdesign
                            </button>
                        </h2>
                    </div>
                    <div id="collapseReise" class="collapse" aria-labelledby="headingReise" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Kommunikationsdesign.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKochbuch">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseKochbuch" aria-expanded="false" aria-controls="collapseKochbuch">
                                Webdesign
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKochbuch" class="collapse" aria-labelledby="headingKochbuch" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Webdesign.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingRatgeber">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseRatgeber" aria-expanded="false" aria-controls="collapseRatgeber">
                                App-Design
                            </button>
                        </h2>
                    </div>
                    <div id="collapseRatgeber" class="collapse" aria-labelledby="headingKochbuch" data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie App-Design.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Computer & Office -->
        <div class="tab-pane fade" id="poesie" role="tabpanel" aria-labelledby="poesie-tab">
            <!-- Akkordeon für Poesie-Unterkategorien -->
            <div class="accordion" id="accordionPoesie">
                <!-- Detailansicht für jede Unterkategorie (z.B. Lyrik) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingLyrik">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseLyrik" aria-expanded="false" aria-controls="collapseLyrik">
                                Zu Computer & Office
                            </button>
                        </h2>
                    </div>
                    <div id="collapseLyrik" class="collapse" aria-labelledby="headingLyrik" data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Computer & Office.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Poesie hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingEpos">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEpos" aria-expanded="false" aria-controls="collapseEpos">
                                Microsoft Office
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEpos" class="collapse" aria-labelledby="headingEpos" data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Microsoft Office.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSonett">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSonett" aria-expanded="false" aria-controls="collapseSonett">
                                Windows
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSonett" class="collapse" aria-labelledby="headingSonett" data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Windows.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingHaiku">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseHaiku" aria-expanded="false" aria-controls="collapseHaiku">
                                macOS
                            </button>
                        </h2>
                    </div>
                    <div id="collapseHaiku" class="collapse" aria-labelledby="headingHaiku" data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie macOS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Professional Computing -->
        <div class="tab-pane fade" id="kinder" role="tabpanel" aria-labelledby="kinder-tab">
            <!-- Akkordeon für Professional Computing Unterkategorien -->
            <div class="accordion" id="accordionkinder">
                <!-- Detailansicht für jede Unterkategorie (z.B. Bilderbuch) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingBilderbuch">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseBilderbuch" aria-expanded="false" aria-controls="collapseBilderbuch">
                                Zu Professional Computing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseBilderbuch" class="collapse" aria-labelledby="headingBilderbuch" data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Professional Computing.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Kinder- und Jugendliteratur hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingErstleser">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseErstleser" aria-expanded="false" aria-controls="collapseErstleser">
                                Programmierung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseErstleser" class="collapse" aria-labelledby="headingErstleser" data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Programmierung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingJugendroman">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseJugendroman" aria-expanded="false" aria-controls="collapseJugendromanr">
                                Softwareentwicklung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseJugendroman" class="collapse" aria-labelledby="headingJugendroman" data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Softwareentwicklung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMaerchen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseMaerchen" aria-expanded="false" aria-controls="collapseMaerchen">
                                DevOps
                            </button>
                        </h2>
                    </div>
                    <div id="collapseMaerchen" class="collapse" aria-labelledby="headingMaerchen" data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie DevOps.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Online-Marketing -->
        <div class="tab-pane fade" id="bildung" role="tabpanel" aria-labelledby="bildung">
            <!-- Akkordeon für KiZu Online-Marketing Unterkategorien -->
            <div class="accordion" id="accordionbildung">
                <!-- Detailansicht für jede Unterkategorie (z.B. Bilderbuch) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingLehrbuch">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseLehrbuch" aria-expanded="false" aria-controls="collapseLehrbuch">
                                Zu Online-Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseLehrbuch" class="collapse" aria-labelledby="headingLehrbuch" data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Online-Marketing.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Online-Marketing hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingWissenschaftliche">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseWissenschaftliche" aria-expanded="false" aria-controls="collapseWissenschaftliche">
                                Social Media Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseWissenschaftliche" class="collapse" aria-labelledby="headingWissenschaftliche" data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Social Media Marketing.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNachschlagewerk">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNachschlagewerk" aria-expanded="false" aria-controls="collapseNachschlagewerk">
                                Content Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNachschlagewerk" class="collapse" aria-labelledby="headingNachschlagewerk" data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Content Marketing.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEnzyklopaedie">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEnzyklopaedie" aria-expanded="false" aria-controls="collapseEnzyklopaedie">
                                Storytelling
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEnzyklopaedie" class="collapse" aria-labelledby="headingEnzyklopaedie" data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Storytelling.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SAP -->
        <div class="tab-pane fade" id="religion" role="tabpanel" aria-labelledby="religion-tab">
            <!-- Akkordeon für SAP Unterkategorien -->
            <div class="accordion" id="accordionreligion">
                <!-- Detailansicht für jede Unterkategorie (z.B. Religiöse Texte) -->
                <!-- Beispiel für eine Unterkategorie -->
                <div class="card">
                    <div class="card-header" id="headingTexte">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTexte" aria-expanded="false" aria-controls="collapseTexte">
                                Zu SAP
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTexte" class="collapse" aria-labelledby="headingTexte" data-parent="#accordionreligion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu SAP.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSpirituelle">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSpirituelle" aria-expanded="false" aria-controls="collapseSpirituelle">
                                SAP-Programmierung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSpirituelle" class="collapse" aria-labelledby="headingSpirituelle" data-parent="#accordionreligion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie SAP-Programmierung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingPhilosophische">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsePhilosophische" aria-expanded="false" aria-controls="collapsePhilosophische">
                                Administration & IT-Management
                            </button>
                        </h2>
                    </div>
                    <div id="collapsePhilosophische" class="collapse" aria-labelledby="headingPhilosophische" data-parent="#accordionreligion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Administration & IT-Management.
                        </div>
                    </div>
                </div>

                <!-- Weitere Unterkategorien für Religion und Spiritualität hier hinzufügen -->
            </div>
        </div>
    </div>
</div>

<div>
    <div class="carousel-container">
        <div id="meinCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indikatoren -->
            <ol class="carousel-indicators">
                <li data-target="#meinCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#meinCarousel" data-slide-to="1"></li>
                <li data-target="#meinCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Bilder Wrapper -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Buch1.webp" class="d-block w-100" alt="Bild 1">
                </div>
                <div class="carousel-item">
                    <img src="img/Buch2.webp" class="d-block w-100" alt="Bild 2">
                </div>
                <div class="carousel-item">
                    <img src="img/Buch4.webp" class="d-block w-100" alt="Bild 3">
                </div>
                <div class="carousel-item">
                    <img src="img/Buch5.webp" class="d-block w-100" alt="Bild 4">
                </div>
                <div class="carousel-item">
                    <img src="img/Buch6.webp" class="d-block w-100" alt="Bild 5">
                </div>
            </div>
        </div>
    </div>

</div>
<!--WERBEBANNER-->
<div>
    <div class="d-flex justify-content-center my-5">
        <div style="max-width: 60%;"> <!-- Stellt die maximale Breite ein -->
            <a href="URL-ZUM-WERBEBANNER" target="_blank">
                <img src="img/banner1.jpg" class="img-fluid" alt="Werbebanner">
            </a>
        </div>
    </div>
</div>


<div>
    <div class="container my-4">
        <h2 class="mb-4 text-warning">Buch-Neuheiten</h2>
        <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Anpassung für 5 Karten pro Reihe auf mittleren und größeren Bildschirmen -->
            <!-- Buch 1 -->
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title">Buchtitel 1</h5>
                        <p class="card-text"><small>Autor 1</small></p>
                        <p class="card-text">Kurze Beschreibung des Buches...</p>
                        <p class="card-text font-weight-bold">0,00 €</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title">Buchtitel 2</h5>
                        <p class="card-text"><small>Autor 2</small></p>
                        <p class="card-text">Kurze Beschreibung des Buches...</p>
                        <p class="card-text font-weight-bold">0,00 €</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title">Buchtitel 3</h5>
                        <p class="card-text"><small>Autor 3</small></p>
                        <p class="card-text">Kurze Beschreibung des Buches...</p>
                        <p class="card-text font-weight-bold">0,00 €</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title">Buchtitel 4</h5>
                        <p class="card-text"><small>Autor 4</small></p>
                        <p class="card-text">Kurze Beschreibung des Buches...</p>
                        <p class="card-text font-weight-bold">0,00 €</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title">Buchtitel 5</h5>
                        <p class="card-text"><small>Autor 5</small></p>
                        <p class="card-text">Kurze Beschreibung des Buches...</p>
                        <p class="card-text font-weight-bold">0,00 €</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-auto">
                <div class="card">
                    <div class="row g-0">
                        <!-- Buchcover mit angepasster Größe -->
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img src="img/Buchcover1.jpg" class="img-fluid rounded-start book-cover" alt="Buchcover 1">
                        </div>
                        <!-- Buchdetails -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Das Buch - Ein Jahrhundert Bestseller</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                                </p>
                                <p class="card-text font-weight-bold">19,99 €</p>
                                <button type="button" class="btn btn-warning">In den Warenkorb</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<footer class="footer bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- Über uns -->
            <div class="col-md">
                <h5 class="text-warning">Über uns</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Unternehmensgeschichte</a></li>
                    <li><a href="#" class="text-light">Philosophie</a></li>
                    <li><a href="#" class="text-light">Team</a></li>
                </ul>
            </div>

            <!-- Service Center -->
            <div class="col-md">
                <h5 class="text-warning">Service Center</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Hilfe & FAQ</a></li>
                    <li><a href="#" class="text-light">Kontakt</a></li>
                    <li><a href="#" class="text-light">Standorte</a></li>
                </ul>
            </div>

            <!-- Rund ums Einkaufen -->
            <div class="col-md">
                <h5 class="text-warning">Rund ums Einkaufen</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Zahlungsmethoden</a></li>
                    <li><a href="#" class="text-light">Versandinformationen</a></li>
                    <li><a href="#" class="text-light">Rücksendungen</a></li>
                </ul>
            </div>

            <!-- Rechtliches -->
            <div class="col-md">
                <h5 class="text-warning">Rechtliches</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">AGB</a></li>
                    <li><a href="#" class="text-light">Widerrufsbelehrung</a></li>
                    <li><a href="#" class="text-light">Datenschutz</a></li>
                    <li><a href="#" class="text-light">Impressum</a></li>
                </ul>
            </div>

            <!-- Ihre Vorteile -->
            <div class="col-md">
                <h5 class="text-warning">Ihre Vorteile</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Mitgliedschaften</a></li>
                    <li><a href="#" class="text-light">Treueprogramme</a></li>
                    <li><a href="#" class="text-light">Sonderangebote</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- FontAwesome für Icons einbinden -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="/Buchershop/js/jquery.js"></script>
<script src="/Buchershop/js/bootstrap.js"></script>
<!-- Optional: jQuery und Bootstrap JS einbinden -->
<script>
    $(document).ready(function(){
        $("#loginLink").click(function(){
            $("#loginModal").modal('show');
        });
    });
</script>
</body>
</html>
