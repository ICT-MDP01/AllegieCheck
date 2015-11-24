<!doctype html>
<html>
<?php include "templates/head.php" ?>
<body>
    <div id="wrapper">
        <?php include "templates/header.php" ?>

        <div id="content">
        <!-- alle content van de pagina -->
            <div class = "bigImage underNav shadow restaurant">
                <div class="overflowImage">
                    <div class = "imageText">
                        <h3>*RESTAURANT NAAM*</h3>
                    </div>
                </div>
            </div>

            <div class = "container">
                <div class = "text">
                    <h4>*Type*</h4>
                        type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type 
                </div>
                <div class = "text">
                    <h4>Menu</h4>
                    <h5>Voorgerechten</h5>
                    
                    <?php         
                        $statement = $pdo->prepare("SELECT * FROM testtabel");
                        $statement->execute();
                        print("text");
                        while ($row = $statement->fetch()) {
                            $naam = $row["naam"];
                            $achternaam = $row["achternaam"];
                            print($naam . " " . $achternaam . "<br>");
                        }
    ​               
                    ?>
                </div>
            </div>
        </div>

        <?php include "templates/footer.php" ?>
    </div>

</body>
</html>
