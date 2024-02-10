<div class="container my-4">
    <h2 class="mb-4 text-warning">Buch-Neuheiten</h2>
    <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Anpassung für 5 Karten pro Reihe auf mittleren und größeren Bildschirmen -->
        <!-- Buch 1 -->


        <?php

        require ('connection.php');
        $stmt = $con->prepare("SELECT * From buch_neuheiten ");//WHERE Id_news= :Id
        //$stmt->bindParam(":Id",$_POST['Id_news']);
        $stmt->execute();

        while ($row = $stmt->fetch()){
            ?>


            <div class="col mb-3">
                <div class="card h-100">
                    <img src="img/Buchcover1.jpg" class="card-img-top" alt="Buchcover Neuheit 1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['buch_titile']?></h5>
                        <p class="card-text"><small><?php echo $row['autor']?></small></p>
                        <p class="card-text"><?php echo $row['kurzbeschreibung']?></p>
                        <p class="card-text font-weight-bold"><?php echo $row['preis']?>€</p> <!-- Preis -->
                        <button type="button" class="btn btn-warning">In den Warenkorb</button> <!-- In den Warenkorb Button -->
                    </div>
                </div>
            </div>
        <?php }?>

    </div>
</div>