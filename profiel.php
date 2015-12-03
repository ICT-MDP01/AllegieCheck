<?php 

// pageinfo
$pageName = "profile";

?>

<!doctype html>
<html>
    <?php include "includes/head.php"; ?>
    
    <body>

        <?php include "includes/header.php"; ?>

        <!-- content -->
		<?php
			if(isset($_SESSION['email'])){
				
			}
				
			else {
				header("location: login.php");
			}
		?>
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
                    <h4>gebruiker gegevens tab</h4>
                    <p> Username: <?php print $_SESSION['username']; ?> - <a href="bewerknaam">bewerk</a></p>
                    <p> Mail: mailadres  - <a href="bewerkmail">bewerk</a></p>
                    <p> Allergiën: [allergie array] - <a href="bewerkallergie">bewerk</a></p>
                    <h4>favoriete restaurants tab (zelfde style als zoek resultaten?)</h4>
                    <p><a href="link naar restaurant">restaurant 1</a></p>
                    <p><a href="link naar restaurant">restaurant 2</a></p>


                </div>
            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
