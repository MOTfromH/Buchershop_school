
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
                <form action="index.php" method="POST">
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input class="form-check-input" type="radio" name="userType" id="customerType" value="customer" checked>-->
<!--                        <label class="form-check-label" for="customerType">Kunde</label>-->
<!--                    </div>-->
                    <!--<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="userType" id="businessType" value="business">
                        <label class="form-check-label" for="businessType">Unternehmen</label>
                    </div>-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="emailInput" placeholder="Username" name="username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="passwordInput" placeholder="Passwort" name="password" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login-submit">Anmelden</button>
                </form>
            </div>
            <div class="modal-footer">
                <span><a href="./regestrieren.php">Ich möchte ein Konto anlegen</a></span>
                <button type="button" class="btn btn-secondary">Konto anlegen</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#loginLink").click(function(){
            $("#loginModal").modal('show');
        });
    });
</script>