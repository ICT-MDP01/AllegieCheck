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
                            <p><a href="/restaurant.php#restaurantContact">contact</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">

                 <!-- info restaurant -->
                <div class="restaurantInfo">
                    <h3><?php print($restaurant["soort"]); ?></h3>
                    <p><?php print($restaurant["informatie"]) ?></p>
                    <br>
                </div> <!-- /.restaurantInfo -->

                <!-- opsomming gerechten -->
                <div class="gerechten">

                    <?php
                        // prepared statement
                        $stmt = $pdo->prepare(" SELECT * FROM gerecht g
                                                WHERE restaurant_id='$restaurant_id'");
                        $stmt->execute();
                        $gerechten = $stmt->fetchAll();
                    ?>

                    <?php foreach ($gerechten as $gerecht) { ?>

                        <div class="gerecht">
                            <h3><?php print($gerecht["naam"]); ?></h3> 
                            <p><?php print($gerecht["informatie"]); ?></p>
                            <p>vinkje</p>
                        </div>

                    <?php } ?>

                </div> <!-- /.restaurantGerechten -->

                <div class="restaurantContact" id="restaurantContact">
                    <p><?php print($restaurant["straat"]); ?></p>
                    <p><?php print($restaurant["postcode"]); ?> <?php print($restaurant["plaats"]); ?></p>
                    <p><?php print($restaurant["email"]); ?></p>
                    <p><?php print($restaurant["telefoon"]); ?></p>
                    <p><?php print($restaurant["website"]); ?></p>
                    <div class="maps">
                        <p>hier komt een kaartje</p>
                    </div>
                </div> 
               

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
