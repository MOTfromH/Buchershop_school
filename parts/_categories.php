<div class="container">
    <!-- Tabs für Hauptkategorien -->
    <ul class="nav nav-tabs" id="categoryTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="fiktion-tab" data-toggle="tab" href="#fiktion" role="tab"
               aria-controls="fiktion" aria-selected="true">Fotografie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sachbuch-tab" data-toggle="tab" href="#sachbuch" role="tab" aria-controls="sachbuch"
               aria-selected="false">Grafik & Design</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="poesie-tab" data-toggle="tab" href="#poesie" role="tab" aria-controls="poesie"
               aria-selected="false">Computer & Office</a>
        </li>
        <!-- Weitere Hauptkategorien hier hinzufügen -->
        <li class="nav-item">
            <a class="nav-link" id="kinder-tab" data-toggle="tab" href="#kinder" role="tab" aria-controls="kinder"
               aria-selected="false">Professional Computing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bildung-tab" data-toggle="tab" href="#bildung" role="tab" aria-controls="bildung"
               aria-selected="false">Online-Marketing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="religion-tab" data-toggle="tab" href="#religion" role="tab" aria-controls="religion"
               aria-selected="false">SAP</a>
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
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseRoman" aria-expanded="true" aria-controls="collapseRoman">
                                Zu Fotografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseRoman" class="collapse" aria-labelledby="headingRoman"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Fotografie.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Fiktion hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingKurzgeschichte">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseKurzgeschichte" aria-expanded="true"
                                    aria-controls="collapseKurzgeschichte">
                                Fotografieren lernen
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKurzgeschichte" class="collapse" aria-labelledby="headingKurzgeschichte"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fotografieren lernen.
                        </div>
                    </div>
                </div><!-- Kurzgeschichte -->
                <div class="card">
                    <div class="card-header" id="headingNovelle">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseNovelle" aria-expanded="true" aria-controls="collapseNovelle">
                                Fototechnik
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNovelle" class="collapse" aria-labelledby="headingNovelle"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fototechnik.
                        </div>
                    </div>
                </div><!-- Fototechnik -->
                <div class="card">
                    <div class="card-header" id="headingFantasy">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseFantasy" aria-expanded="true" aria-controls="collapseFantasy">
                                Fotogenres
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFantasy" class="collapse" aria-labelledby="headingFantasy"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Fotogenres.
                        </div>
                    </div>
                </div><!--Fotogenres -->
                <div class="card">
                    <div class="card-header" id="headingsciencefiction">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapsesciencefiction" aria-expanded="true"
                                    aria-controls="collapsesciencefiction">
                                Kamerahandbücher
                            </button>
                        </h2>
                    </div>
                    <div id="collapsesciencefiction" class="collapse" aria-labelledby="headingsciencefiction"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Kamerahandbücher.
                        </div>
                    </div>
                </div><!--Kamerahandbücher-->
                <div class="card">
                    <div class="card-header" id="headingHorror">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseHorror" aria-expanded="true" aria-controls="collapseHorror">
                                Professionelle Fotografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseHorror" class="collapse" aria-labelledby="headingHorror"
                         data-parent="#accordionFiktion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Professionelle Fotografie.
                        </div>
                    </div>
                </div><!--Professionelle Fotografie-->
                <div class="card">
                    <div class="card-header" id="headingThriller">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseThriller" aria-expanded="true"
                                    aria-controls="collapseThriller">
                                Fotobearbeitung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThriller" class="collapse" aria-labelledby="headingThriller"
                         data-parent="#accordionFiktion">
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
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseBiografie" aria-expanded="false"
                                    aria-controls="collapseBiografie">
                                Zu Grafik & Design
                            </button>
                        </h2>
                    </div>
                    <div id="collapseBiografie" class="collapse" aria-labelledby="headingBiografie"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Grafik & Design.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Sachbuch hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingGeschichte">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseGeschichte" aria-expanded="false"
                                    aria-controls="collapseGeschichte">
                                Grafikprogramme
                            </button>
                        </h2>
                    </div>
                    <div id="collapseGeschichte" class="collapse" aria-labelledby="headingGeschichte"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Grafikprogramme.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingWissenschaft">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseWissenschaft" aria-expanded="false"
                                    aria-controls="collapseWissenschaft">
                                Illustration
                            </button>
                        </h2>
                    </div>
                    <div id="collapseWissenschaft" class="collapse" aria-labelledby="headingWissenschaft"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Illustration.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSelbsthilfe">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSelbsthilfe" aria-expanded="false"
                                    aria-controls="collapseSelbsthilfe">
                                Layout und Typografie
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSelbsthilfe" class="collapse" aria-labelledby="headingSelbsthilfe"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Layout und Typografie.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingReise">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseReise" aria-expanded="false"
                                    aria-controls="collapseReise">
                                Kommunikationsdesign
                            </button>
                        </h2>
                    </div>
                    <div id="collapseReise" class="collapse" aria-labelledby="headingReise"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Kommunikationsdesign.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingKochbuch">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseKochbuch" aria-expanded="false"
                                    aria-controls="collapseKochbuch">
                                Webdesign
                            </button>
                        </h2>
                    </div>
                    <div id="collapseKochbuch" class="collapse" aria-labelledby="headingKochbuch"
                         data-parent="#accordionSachbuch">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Webdesign.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingRatgeber">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseRatgeber" aria-expanded="false"
                                    aria-controls="collapseRatgeber">
                                App-Design
                            </button>
                        </h2>
                    </div>
                    <div id="collapseRatgeber" class="collapse" aria-labelledby="headingKochbuch"
                         data-parent="#accordionSachbuch">
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
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseLyrik" aria-expanded="false"
                                    aria-controls="collapseLyrik">
                                Zu Computer & Office
                            </button>
                        </h2>
                    </div>
                    <div id="collapseLyrik" class="collapse" aria-labelledby="headingLyrik"
                         data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Computer & Office.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Poesie hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingEpos">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseEpos" aria-expanded="false"
                                    aria-controls="collapseEpos">
                                Microsoft Office
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEpos" class="collapse" aria-labelledby="headingEpos"
                         data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Microsoft Office.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSonett">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSonett" aria-expanded="false"
                                    aria-controls="collapseSonett">
                                Windows
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSonett" class="collapse" aria-labelledby="headingSonett"
                         data-parent="#accordionPoesie">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Windows.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingHaiku">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseHaiku" aria-expanded="false"
                                    aria-controls="collapseHaiku">
                                macOS
                            </button>
                        </h2>
                    </div>
                    <div id="collapseHaiku" class="collapse" aria-labelledby="headingHaiku"
                         data-parent="#accordionPoesie">
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
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseBilderbuch" aria-expanded="false"
                                    aria-controls="collapseBilderbuch">
                                Zu Professional Computing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseBilderbuch" class="collapse" aria-labelledby="headingBilderbuch"
                         data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Professional Computing.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Kinder- und Jugendliteratur hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingErstleser">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseErstleser" aria-expanded="false"
                                    aria-controls="collapseErstleser">
                                Programmierung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseErstleser" class="collapse" aria-labelledby="headingErstleser"
                         data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Programmierung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingJugendroman">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseJugendroman" aria-expanded="false"
                                    aria-controls="collapseJugendromanr">
                                Softwareentwicklung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseJugendroman" class="collapse" aria-labelledby="headingJugendroman"
                         data-parent="#accordionkinder">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Softwareentwicklung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingMaerchen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseMaerchen" aria-expanded="false"
                                    aria-controls="collapseMaerchen">
                                DevOps
                            </button>
                        </h2>
                    </div>
                    <div id="collapseMaerchen" class="collapse" aria-labelledby="headingMaerchen"
                         data-parent="#accordionkinder">
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
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseLehrbuch" aria-expanded="false"
                                    aria-controls="collapseLehrbuch">
                                Zu Online-Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseLehrbuch" class="collapse" aria-labelledby="headingLehrbuch"
                         data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu Online-Marketing.
                        </div>
                    </div>
                </div>
                <!-- Weitere Unterkategorien für Online-Marketing hier hinzufügen -->
                <div class="card">
                    <div class="card-header" id="headingWissenschaftliche">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseWissenschaftliche"
                                    aria-expanded="false" aria-controls="collapseWissenschaftliche">
                                Social Media Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseWissenschaftliche" class="collapse" aria-labelledby="headingWissenschaftliche"
                         data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Social Media Marketing.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNachschlagewerk">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseNachschlagewerk" aria-expanded="false"
                                    aria-controls="collapseNachschlagewerk">
                                Content Marketing
                            </button>
                        </h2>
                    </div>
                    <div id="collapseNachschlagewerk" class="collapse" aria-labelledby="headingNachschlagewerk"
                         data-parent="#accordionbildung">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Content Marketing.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEnzyklopaedie">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseEnzyklopaedie" aria-expanded="false"
                                    aria-controls="collapseEnzyklopaedie">
                                Storytelling
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEnzyklopaedie" class="collapse" aria-labelledby="headingEnzyklopaedie"
                         data-parent="#accordionbildung">
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
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTexte" aria-expanded="false"
                                    aria-controls="collapseTexte">
                                Zu SAP
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTexte" class="collapse" aria-labelledby="headingTexte"
                         data-parent="#accordionreligion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie Zu SAP.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSpirituelle">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSpirituelle" aria-expanded="false"
                                    aria-controls="collapseSpirituelle">
                                SAP-Programmierung
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSpirituelle" class="collapse" aria-labelledby="headingSpirituelle"
                         data-parent="#accordionreligion">
                        <div class="card-body">
                            Inhalte oder Liste von Büchern für die Kategorie SAP-Programmierung.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingPhilosophische">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapsePhilosophische" aria-expanded="false"
                                    aria-controls="collapsePhilosophische">
                                Administration & IT-Management
                            </button>
                        </h2>
                    </div>
                    <div id="collapsePhilosophische" class="collapse" aria-labelledby="headingPhilosophische"
                         data-parent="#accordionreligion">
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
