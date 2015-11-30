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
                        <h1>Gezocht op: Zoekresultaat</h1>
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
                    $stmt = $pdo->prepare("SELECT * FROM restaurant");
                    $stmt->execute();
                    $restaurants = $stmt->fetchAll();

                ?>

                <?php foreach ($restaurants as $restaurant) { ?>

                     <div class="restaurant">
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <h3><?php print $restaurant["naam"]; ?></h3>
                            <h5><?php print $restaurant["soort_id"]; ?></h5>
                            <p><?php print $restaurant["plaats"]; ?></p>
                        </div>
                    </div>
                            
                <?php  } ?>

                </div> <!-- /.restaurants -->

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
