<?php 

// pageinfo
$pageName = "registreren";

?>

<!doctype html>
<html>
    
    <?php include "includes/head.php"; ?>

    <body>

        <?php include "includes/header.php"; ?>


        <!-- content -->
        <main id="content">
            
	        <div class="container">
		        <h1>Registreer template</h1>
				
				<form action="" method="post">

					<div>
						<label for="username">Username:</label>
						<input name="username" type="text" id="username">
					</div>

					<div>
						<label for="email">Emailadres:</label>
						<input name="email" type="email" id="email">
					</div>
					
					<div>
						<label for="password">Wachtwoord:</label>
						<input name="password" type="password" id="password">
					</div>

					<div id="checkBoxes">
		                <label for="allergie1">
		                    <input type="checkbox" id="allergie1" value="allergie1" />
		                    <span class="label-body">Allergie 1</span>
		                </label>
		                <label for="allergie2">
		                    <input type="checkbox" id="allergie2" value="allergie2" />
		                    <span class="label-body">Allergie 2</span>
		                </label>
		                <label for="allergie3">
		                    <input type="checkbox" id="allergie3" value="allergie3" />
		                    <span class="label-body">Allergie 3</span>
		                </label>
		                <label for="allergie4">
		                    <input type="checkbox" id="allergie4" value="allergie4" />
		                    <span class="label-body">Allergie 4</span>
		                </label>
		                <label for="allergie5">
		                    <input type="checkbox" id="allergie5" value="allergie5" />
		                    <span class="label-body">Allergie 5</span>
		                </label>
	                </div>

	                <input type="submit" value="Inloggen">

				</form>
			</div> <!-- /.container -->

		</main>
 
        <?php include "includes/footer.php"; ?>
        
    </body>
</html>