<!doctype html>
<html>
    
    <?php include "includes/head.php" ?>

    <?php $pageName="Restaurant" ?>
    
    <body>

        <?php include "includes/header.php" ?>

        <!-- content -->
        <main id="content">
            
            <div class="banner">
                <h1>Restaurant</h1>
                <p><a href="/restaurant.php#restaurantContact">contact</a></p>
            </div>
            
            <div class="container">

                 <!-- info restaurant -->
                <div class="restaurantInfo">
                    <h3>Mexicaans restaurant (type)</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam. Donec tincidunt rhoncus turpis sed semper. In at est et erat faucibus scelerisque. Maecenas nec tristique erat, nec maximus mauris. Praesent ultrices eros lectus, in posuere purus consectetur in.</p>
                    <br>
                </div> <!-- /.restaurantInfo -->

                <!-- opsomming gerechten -->
                <div class="gerechten">
                    <div class="gerecht">
                        <h3>Gerechttitel</h3> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam.</p>
                        <p>vinkje</p>
                    </div>

                     <div class="gerecht">
                        <h3>Gerechttitel</h3> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam.</p>
                        <p>vinkje</p>
                    </div>

                     <div class="gerecht">
                        <h3>Gerechttitel</h3> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam.</p>
                    </div>
                </div> <!-- /.restaurantGerechten -->

                <div class="restaurantContact" id="restaurantContact">
                    <p>campusstraat 60</p>
                    <p>8372HS Zwolle</p>
                    <p>info@restaurant.nl</p>
                    <p>02 938472930</p>
                    <div class="maps">
                        <p>hier komt een kaartje</p>
                    </div>
                </div> 
               

            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php" ?>
        
    </body>
</html>
