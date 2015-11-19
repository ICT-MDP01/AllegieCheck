<!doctype html>
<html>
<<<<<<< HEAD
=======

    <?php include "templates/head.php" ?>

    <body>

        <?php include "templates/header.php" ?>
>>>>>>> refs/remotes/origin/master

<?php include "templates/database.php" ?>
<?php include "templates/head.php" ?>
<body>
    <?php include "templates/header.php" ?>


    <!-- content -->
    <div class="bigImage">
        <div class="overflowImage">

            <div class="container">
                <div class="formDiv">
                    <form method="get" action="restaurants.php">
                        <input type="text" name="query">
                        <input type="submit" value="Zoek" class=button-primary><br>
                        <input type="checkbox">Allergie1</input><br>
                        <input type="checkbox">Allergie2</input><br>
                        <input type="checkbox">Allergie3</input><br>
                        <input type="checkbox">Allergie4</input><br>
                        <input type="checkbox">Allergie5</input><br>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

        <div class="container">
        <p>Dit is een paragraaf</p> 

        <p>Als de database connectie is gelukt dan staat er hieronder een lijstje met onze namen:</p>

        <?php 
        // php statement uit database
        $statement = $pdo->prepare("SELECT * FROM testtabel");
        $statement->execute();

        while ($row = $statement->fetch()) {
            $naam = $row["naam"];
            $achternaam = $row["achternaam"];
            print($naam . " " . $achternaam . "<br>");
        }

        ?>

    </div>


    <?php include "templates/footer.php" ?>

</body>
</html>
