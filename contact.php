<!doctype html>
<html>
    
    <?php include "templates/head.php" ?>

    <body>

        
        <?php 
     

             

        include "templates/header.php" ?>
        

        <!-- content -->
        
        <form method="get" action="contact.php">
       <textarea name="mening"></textarea>
        	
             <input type="submit" name="Verstuur" value="Verstuur"><br>

        	<?php

        	  print_r ($_GET);
              

        	?>
        <?php include "templates/footer.php" ?>
        
    </body>
</html>
