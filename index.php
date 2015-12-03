<?php 

// pageinfo
$pageName = "home";

?>

<!doctype html>
<html>

    <?php include "includes/head.php" ?>
    
    <body>

        <?php include "includes/header.php" ?>

        <!-- content -->
        <div class="banner">
            <div class="darken">
                <div class="container">

                    <div class="formDiv">

                        <form method="get" action="restaurants.php">

                            <div class="searchTitle">
                                <h1>Vind uw favoriete restaurant</h1>
                            </div>

                            <!-- zoekbalk -->
                            <div class="searchArea">
                                <div class="searchBar">
                                    <input type="text" name="query" class="searchText" placeholder="Zoek op plaats of restaurantnaam" onClick="this.setSelectionRange(0, this.value.length)">
                                </div>
                                <div class="searchButton">
                                    <button type="submit" class=""><i class="fa fa-search"></i></button>
                                </div>
                            </div>

                            <!-- allergieen checkboxes -->
                            <h5 class="allergieenTitle">Selecteer uw allergie(ën)</h5>
                            <div id="checkboxesAllergieen">

                                <?php
                                    // prepared statement
                                    $stmt = $pdo->prepare("SELECT * FROM allergie");
                                    $stmt->execute();
                                    $allergieen = $stmt->fetchAll();

                                ?>

                                <?php foreach ($allergieen as $allergie) { ?>
                              
                                    <label for="<?php print($allergie['naam']); ?>" >
                                        <input 
                                        type="checkbox" 
                                        id="allergie-<?php print($allergie['allergie_id']); ?>"
                                        name="<?php print($allergie['allergie_id']); ?>" />
                                        <!-- <div class="allergieIcon"> -->
                                            <?php //include $allergie["icon"] ?>
                                        <!-- </div> -->
                                        <span><?php print($allergie["naam"]); ?> </span>
                                    </label>

                                <?php } ?>
                            </div>

                            <input type="hidden" name="gezocht" value="true">

                        </form>
    
                    </div> 
                </div> <!-- /.container -->
            </div>
        </div>

        <main id="content">
            <div class="appInfo">
                <div class="container">
                    <h1>Download de app</h1> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam. Donec tincidunt rhoncus turpis sed semper. In at est et erat faucibus scelerisque. Maecenas nec tristique erat, nec maximus mauris. Praesent ultrices eros lectus, in posuere purus consectetur in. Fusce eleifend leo ex, viverra lobortis ex vehicula sit amet. Proin lobortis tellus risus, aliquet hendrerit orci semper ut. Aliquam non imperdiet purus.
Nunc tincidunt blandit nibh, hendrerit commodo magna euismod eget. </p></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam. Donec tincidunt rhoncus turpis sed semper. In at est et erat faucibus scelerisque. Maecenas nec tristique erat, nec maximus mauris. Praesent ultrices eros lectus, in posuere purus consectetur in. Fusce eleifend leo ex, viverra lobortis ex vehicula sit amet. Proin lobortis tellus risus, aliquet hendrerit orci semper ut. Aliquam non imperdiet purus.
Nunc tincidunt blandit nibh, hendrerit commodo magna euismod eget. </p></br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit et odio in consequat. Aenean in blandit quam. Donec tincidunt rhoncus turpis sed semper. In at est et erat faucibus scelerisque. Maecenas nec tristique erat, nec maximus mauris. Praesent ultrices eros lectus, in posuere purus consectetur in. Fusce eleifend leo ex, viverra lobortis ex vehicula sit amet. Proin lobortis tellus risus, aliquet hendrerit orci semper ut. Aliquam non imperdiet purus.
Nunc tincidunt blandit nibh, hendrerit commodo magna euismod eget. </p></br>
                </div> <!-- container -->
            </div>

        </main>

        <?php include "includes/footer.php" ?>

</body>
</html>
