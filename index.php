<!doctype html>
<html>
    
    <?php include "templates/database.php" ?>
    <?php include "templates/head.php" ?>

    <body>

        <?php include "templates/header.php" ?>


        <!-- content -->
        <h1>Welkom</h1>
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

        <?php include "templates/footer.php" ?>
        
    </body>
</html>
