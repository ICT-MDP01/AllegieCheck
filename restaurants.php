<?php 

// pageinfo
$pageName = "restaurants";

?>

<!doctype html>
<html>
    
    <?php include "includes/head.php"; ?>
    
    <body>

        <?php include "includes/header.php"; ?>

        <?php                

            if (isset($_GET["query"])) {
                $query = $_GET["query"];
                $stmt = $pdo->prepare(" SELECT * FROM restaurant r 
                                        INNER JOIN restaurantsoort s 
                                        ON r.soort_id = s.soort_id 
                                        WHERE r.naam LIKE '%" . $query . "%'
                                        OR r.plaats LIKE '%" . $query . "%'
                                        OR r.straat LIKE '%" . $query . "%'
                                        OR r.postcode LIKE '%" . $query . "%'
                                        OR s.soort LIKE '%" . $query . "%' "); 
            } else {
                $stmt = $pdo->prepare(" SELECT * FROM restaurant r 
                                        INNER JOIN restaurantsoort s 
                                        ON r.soort_id = s.soort_id");
            
            }

            $stmt->execute();
            $restaurants = $stmt->fetchAll();

        ?>

        <!-- content -->     
        <div class="banner">
            <div class="darken">
                <div class="bannerTitle">
                    <div class="container">

                        <form method="get" action="restaurants.php">
                            <!-- zoekbalk -->
                            <div class="searchArea">
                                <div class="searchBar">
                                    <input type="text" name="query" class="searchText" placeholder="Zoek op plaats of restaurantnaam" value="<?php print($query); ?>" onClick="this.setSelectionRange(0, this.value.length)">
                                </div>
                                <div class="searchButton">
                                    <button type="submit" class=""><i class="fa fa-search"></i></button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

         <main id="content">
            
            <div class="container">
                 
                <!-- zoekresultaat -->
                <div class="restaurants">

                <?php if ($restaurants) { ?>

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
                <?php } else { 
                    print("Helaas is er niks gevonden. Probeer het hierboven opnieuw." );
                } ?>
                

                </div> <!-- /.restaurants -->

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
