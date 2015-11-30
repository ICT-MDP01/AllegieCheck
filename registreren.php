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
		                
		                <br><label for="titel">Koppel uw Allergie:</label><br>

		                <label for="allergie1">
		                    <input type="checkbox" id="allergie1" value="allergie1" />
		                    <span class="label-body">Gluten</span>
		                </label>
		                <label for="allergie2">
		                    <input type="checkbox" id="allergie2" value="allergie2" />
		                    <span class="label-body">Ei</span>
		                </label>
		                <label for="allergie3">
		                    <input type="checkbox" id="allergie3" value="allergie3" />
		                    <span class="label-body">Vis</span>
		                </label>
		                <label for="allergie4">
		                    <input type="checkbox" id="allergie4" value="allergie4" />
		                    <span class="label-body">Pinda</span>
		                </label>
		                <label for="allergie5">
		                    <input type="checkbox" id="allergie5" value="allergie5" />
		                    <span class="label-body">Noten</span>
		                </label>
	                    <label for="allergie6">
		                    <input type="checkbox" id="allergie6" value="allergie6" />
		                    <span class="label-body">Soja</span>
		                </label>
		                <label for="allergie7">
		                    <input type="checkbox" id="allergie7" value="allergie7" />
		                    <span class="label-body">Lactose</span>
		                </label>
		            
		                <label for="allergie8">
		                    <input type="checkbox" id="allergie8" value="allergie8" />
		                    <span class="label-body">Schaaldieren</span>
		                </label>
		                <label for="allergie9">
		                    <input type="checkbox" id="allergie9" value="allergie9" />
		                    <span class="label-body">Weekdieren</span>
		                </label>
		                <label for="allergie10">
		                    <input type="checkbox" id="allergie10" value="allergie10" />
		                    <span class="label-body">Selderij</span>
		                </label>
		                  <label for="allergie11">
		                    <input type="checkbox" id="allergie11" value="allergie11" />
		                    <span class="label-body">Mosterd</span>
		                </label>
		                  <label for="allergie12">
		                    <input type="checkbox" id="allergie12" value="allergie12" />
		                    <span class="label-body">Sesamzaad</span>
		                </label>
		                  <label for="allergie13">
		                    <input type="checkbox" id="allergie13" value="allergie13" />
		                    <span class="label-body">Zwaveldioxide</span>
		                </label>
		                  <label for="allergie14">
		                    <input type="checkbox" id="allergie14" value="allergie14" />
		                    <span class="label-body">Lupine</span>
		                </label>













	                </div>

	                <input type="submit" value="Inloggen">

				</form>
			</div> <!-- /.container -->

		</main>
 
        <?php include "includes/footer.php"; ?>
        
    </body>
</html>