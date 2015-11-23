<!doctype html>
<html>
    <?php include "templates/head.php" ?>
    <body>
        <?php include "templates/header.php" ?>

        <!-- content -->
        <div class="bigImage underNav">
            <div class="overflowImage">

                <div class="container">
                    <div class="formDiv shadow">

                        <form method="get" action="restaurants.php">
                            <div class="searchBar">
                                <input type="text" name="query" class="searchText" placeholder="Zoek een stad of restaurant type">
                                <input type="submit" value="" class="searchButton shadow"><br>
                            </div>

                            <!-- for Skeleton, checkboxes are prefereably wrapped in <label> tags -->
                            <div id="checkBoxes">
                                <label for="allergie1">
                                    <input type="checkbox" id="allergie1" value="allergie1" />
                                    <span>Allergie 1</span>
                                </label>
                                <label for="allergie2">
                                    <input type="checkbox" id="allergie2" value="allergie2" />
                                    <span>Allergie 2</span>
                                </label>
                                <label for="allergie3">
                                    <input type="checkbox" id="allergie3" value="allergie3" />
                                    <span>Allergie 3</span>
                                </label>
                                <label for="allergie4">
                                    <input type="checkbox" id="allergie4" value="allergie4" />
                                    <span>Allergie 4</span>
                                </label>
                                <label for="allergie5">
                                    <input type="checkbox" id="allergie5" value="allergie5" />
                                    <span>Allergie 5</span>
                                </label>
                            </div>


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
