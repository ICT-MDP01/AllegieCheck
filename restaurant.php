<!doctype html>
<html>
    
    <?php include "templates/head.php" ?>
    
    <body>

        <?php include "templates/header.php" ?>

        <!-- content -->
        <div class = "imageContainer">
        	<div class = "imageText">
        		<h3>*RESTAURANT NAAM*</h3>
        	</div>
        </div>

        <div class = "container">
        	<div class = "text">
        		<h4>*Type*</h4>
        			type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type type 
        	</div>
        	<div class = "text">
        		<h4>Menu</h4>
        		<h5>Voorgerechten</h5>
        		
        		<?php         
        			$statement = $pdo->prepare("SELECT * FROM testtabel");
        			$statement->execute();
        			print("text");
        			while ($row = $statement->fetch()) {
            			$naam = $row["naam"];
            			$achternaam = $row["achternaam"];
            			print($naam . " " . $achternaam . "<br>");
        			}
​				
				?>
        	</div>
        </div>

        <?php include "templates/footer.php" ?>
        
    </body>
</html>
