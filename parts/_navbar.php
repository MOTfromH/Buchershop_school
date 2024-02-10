<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img class="ms-2" src="./img/wosny.png" alt="logo" width="30" height="24">Wosny.net</a>
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
            <a class="nav-item nav-link" href="#"><i class="fas fa-shopping-cart"></i> Warenkorb (<?php $cardItems?>)</a>
        </div>
    </div>
</nav>
