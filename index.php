<?php 

// pageinfo
$pageName = "Home";

?>

<!doctype html>
<html>

    <?php include "includes/head.php" ?>
    
    <body>

        <?php include "includes/header.php" ?>

        <!-- content -->
        <main id="content">
            <div class="banner">
                <div class="darken">
                    <div class="container">

                        <div class="formDiv">

                            <form method="get" action="restaurants.php">

                                <!-- zoekbalk -->
                                <div class="searchArea">
                                    <div class="searchBar">
                                        <input type="text" name="query" class="searchText" placeholder="Zoek een stad of restaurant type">
                                    </div>
                                    <div class="searchButton">
                                        <button type="submit" class=""><i class="fa fa-search"></i></button>
                                    </div>
                                </div>

                                <!-- allergieen checkboxes -->
                                <div id="checkboxesAllergieen">
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
                    </div> <!-- /.container -->
                </div>
            </div>

            <div class="appInfo">
                <div class="container">
                    <p>Download de app</p> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam. Donec tincidunt rhoncus turpis sed semper. In at est et erat faucibus scelerisque. Maecenas nec tristique erat, nec maximus mauris. Praesent ultrices eros lectus, in posuere purus consectetur in. Fusce eleifend leo ex, viverra lobortis ex vehicula sit amet. Proin lobortis tellus risus, aliquet hendrerit orci semper ut. Aliquam non imperdiet purus.

Nunc tincidunt blandit nibh, hendrerit commodo magna euismod eget. Sed magna purus, posuere nec convallis in, pellentesque in justo. Aliquam pulvinar interdum lacus et congue. Aenean faucibus quam nec dictum pharetra. Pellentesque molestie mauris luctus justo maximus scelerisque. Phasellus tempus consectetur convallis. Vivamus tempor tincidunt velit vitae scelerisque. Integer convallis ex a faucibus accumsan. Morbi commodo nisi id nisl blandit malesuada. Pellentesque sodales, augue sit amet convallis interdum, libero tellus vulputate nisi, non finibus urna lectus eget lectus. Phasellus dapibus turpis neque, in consequat libero rhoncus nec.</p>
                </div> <!-- container -->
            </div>

        </main>

        <?php include "includes/footer.php" ?>

</body>
</html>
