<!doctype html>
<html>
    
    <?php include "templates/head.php" ?>

    <body>

        <?php include "templates/header.php" ?>


        <!-- content -->
        <div class="container">
	        <h1>Registreer template</h1>

	        <p>badumm tss</p>
			
			<form action="" method="post">

				<label for="username">Username:
					<input name="username" type="text" id="username">
				</label>

				<label for="email">Emailadres:
					<input name="email" type="email" id="email">
				</label>
			
				<label for="password">Wachtwoord:
					<input name="password" type="password" id="password">
				</label>

				<div id="checkBoxes">
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

                <input type="submit" value="Inloggen">

			</form>
		</div>


        <?php include "templates/footer.php" ?>
        
    </body>
</html>
