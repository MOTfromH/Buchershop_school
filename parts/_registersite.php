<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="text-center mt-3">
                                <h1>Account Erstellen</h1>
                            </div>
                            <input type="text" class="form-control my-3 py-2" placeholder="Benutzername" name="username"
                                   autocomplete="off">
                            <input type="text" class="form-control my-3 py-2" placeholder="Email" name="email"
                                   autocomplete="off">
                            <input type="text" class="form-control my-3 py-2" placeholder="Passwort" name="password"
                                   autocomplete="off">
                            <div class="text-center mt-3">
                                <button name="submit" class="btn btn-primary">Erstellen</button>
                                <a href="#" class="nav-link mt-1">Bereits registriert?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>