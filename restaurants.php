<?php 

// pageinfo
$pageName = "restaurants";

?>

<!doctype html>
<html>
    
    <?php include "includes/head.php"; ?>
    
    <body>

        <?php include "includes/header.php"; ?>

        <!-- content -->     
        <div class="banner">
            <div class="darken">
                <div class="bannerTitle">
                    <div class="container">
                        <?php if (isset($_GET["query"])) { ?>
                            <h1>Gezocht op: <?php print($_GET["query"]); ?></h1>
                        <?php } else { ?>
                            <h1>Alle restaurants</h1>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

         <main id="content">
            
            <div class="container">
                 
                <!-- zoekresultaat -->
                <div class="restaurants">

                <?php
                    // prepared statement
                    $stmt = $pdo->prepare("SELECT * FROM restaurant r INNER JOIN restaurantsoort s ON r.soort_id = s.soort_id");
                    $stmt->execute();
                    $restaurants = $stmt->fetchAll();   

                ?>

                <?php foreach ($restaurants as $restaurant) { ?>

                    <a href="restaurant.php?id=<?php print($restaurant['restaurant_id']); ?>">
                        <div class="restaurant shadow">
                            <div class="restaurantImage" style="background-image: url(<?php print($restaurant["afbeelding"]) ?>);">
                            </div>
                            <div class="restaurantInfo">
                                <h3 class="restaurantName"><?php print $restaurant["naam"]; ?></h3>
                                <h5 class="restaurantType"><?php print $restaurant["soort"]; ?></h5>
                                <p class="restaurantPlace"><?php print $restaurant["plaats"]; ?></p>
                            </div>
                        </div>
                    </a>
                            
                <?php  } ?>

                </div> <!-- /.restaurants -->

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
