<?php 

// pageinfo
$pageName = "profiel";

?>

<!doctype html>
<html>
    <?php include "includes/head.php"; ?>
    
    <body>

        <?php include "includes/header.php"; ?>

        <!-- content -->
        <main id="content">
            <div class="banner">
                <div class="darken">
                    <div class="bannerTitle">
                        <div class="container">
                            <h1>Profiel</h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="">

                    <h4>Gebruiker gegevens</h4>
                    <p> Gebruikersnaam: <?php print $_SESSION['username']; ?>   - <a href="bewerknaam">bewerk</a></p>
                    <p> Mail: <?php print $_SESSION['email']; ?>   - <a href="bewerkmail">bewerk</a></p>
                    <p> Allergieën: [allergie array / nog te doen] - <a href="bewerkallergie">bewerk</a></p>
                </div> 

                <div class="">
                    <div class="restaurants">
                        <h4>Favoriete restaurants</h4>
                        <?php
                            // prepared statement
                            $stmt = $pdo->prepare("SELECT * FROM restaurant r 
                                INNER JOIN restaurantsoort s ON r.soort_id = s.soort_id
                                INNER JOIN favoriet f ON r.restaurant_id = f.restaurant_id
                                WHERE f.gebruiker_id = $gebruiker_ID_GET;
                                ");
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
                </div>

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
