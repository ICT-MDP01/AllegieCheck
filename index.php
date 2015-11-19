<!doctype html>
<html>

<?php include "templates/database.php" ?>
<?php include "templates/head.php" ?>

<body>
    <?php include "templates/header.php" ?>


    <!-- content -->
    <div class="bigImage">
        <div class="overflowImage">
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
