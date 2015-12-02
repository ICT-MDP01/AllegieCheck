<?php 

// pageinfo
$pageName = "restaurant";

?>

<!doctype html>
<html>
    
    <?php include "includes/head.php"; ?>
    
    <body>

        <?php include "includes/header.php"; ?>

            <?php

                if (isset($_GET["id"])) {
                    $restaurant_id = $_GET["id"];
                } else {
                    $restaurant_id = "Error";
                }

                // prepared statement
                $stmt = $pdo->prepare(" SELECT * FROM restaurant r 
                                        INNER JOIN restaurantsoort s 
                                        ON r.soort_id = s.soort_id
                                        WHERE restaurant_id='$restaurant_id'");
                $stmt->execute();
                $restaurant = $stmt->fetchAll();
                $restaurant = $restaurant[0];

            ?>

        <!-- content -->
        <main id="content">
            <div class="banner" style="background-image: url(<?php print($restaurant["afbeelding"]); ?>);">
                <div class="darken">
                    <div class="bannerTitle">
                        <div class="container">
                            <h1><?php print($restaurant["naam"]); ?></h1>
                            <p><?php print($restaurant["soort"]); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">

                 <!-- info restaurant -->
                <div class="restaurantInfo">
                    <h3></h3>
                    <p><?php print($restaurant["informatie"]) ?></p>
                    <br>
                </div> <!-- /.restaurantInfo -->

                <!-- opsomming gerechten -->
                <div class="gerechten">
                    <h3>Gerechten</h3>

                    <?php
                        // prepared statement
                        $stmt = $pdo->prepare(" SELECT ng.gerecht_id, a.icon, a.naam
                                                FROM allergie a
                                                RIGHT JOIN niet_geschikt ng
                                                ON a.allergie_id = ng.allergie_id
                                                WHERE ng.gerecht_id IN (SELECT gerecht_id
                                                                        FROM gerecht
                                                                        WHERE restaurant_id = $restaurant_id )");
                        $stmt->execute();
                        $allergieIconen = $stmt->fetchAll();


                        $stmt = $pdo->prepare(" SELECT gerecht_id, naam, informatie
                                                FROM gerecht
                                                WHERE restaurant_id = $restaurant_id");
                        $stmt->execute();
                        $gerechten = $stmt->fetchAll();
                    ?>

                    <?php foreach ($gerechten as $gerecht) { ?>

                        <div class="gerecht shadow">
                            <div class="gerechtBar">
                                <div class="gerechtTitle">
                                    <h5><?php print($gerecht["naam"]); ?></h5>
                                </div>
                                <div class="gerechtVink">
                                    <?php 
                                    foreach ($allergieIconen as $icon) {
                                        if($gerecht["gerecht_id"] == $icon["gerecht_id"]) { ?>

                                        <div class="gerechtAllergie" title="<?php print($icon["naam"]) ?>">
                                            <?php include $icon["icon"] ?>
                                        </div>

                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="gerechtDesc">
                                <p><?php print($gerecht["informatie"]); ?></p>
                                <?php  ?>
                            </div>
                        </div>

                    <?php } ?>

                </div> <!-- /.restaurantGerechten -->

                <div class="restaurantContact" id="restaurantContact">
                    <p><?php print($restaurant["straat"]); ?><br>
                       <?php print($restaurant["postcode"]); ?> <?php print($restaurant["plaats"]); ?><br>
                       <?php print($restaurant["email"]); ?><br>
                       <?php print($restaurant["telefoon"]); ?><br>
                       <?php print($restaurant["website"]); ?></p>

                    <iframe class="maps shadow" frameborder="0" style="border:0" 
                        src="https://www.google.com/maps/embed/v1/place?q=<?php print($restaurant["naam"] . " " . $restaurant["postcode"]) ?>&key=AIzaSyDgMfv7G4Ax3VOOr89xxdxAda5NEuYgWV4">
                    </iframe>
                </div> 
               

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
