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
				
				<form action="" method="get" class="registerForm">

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
                                <span><?php print($allergie["naam"]); ?> </span>
                            </label>

                        <?php } ?>

	                </div>

	                <input type="submit" value="Inloggen">

				</form>
			</div> <!-- /.container -->

		</main>
 
        <?php include "includes/footer.php"; ?>
        
    </body>
</html>