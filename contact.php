<?php 

// pageinfo
$pageName = "contact";

?>

<!doctype html>
<html>
    
    <?php include "includes/head.php"; ?>

    <body>
    
        <?php include "includes/header.php"; ?>

        <!-- content -->
        <main id="content">
            <div class="container underNav">

                <h1>Contact</h1>
                <p>Heb je vragen of kritiek? of wil je gewoon je mening achterlaten vul dan dit formulier in of stuur mij een email!</P>
                
                <form method="get" action="contact.php">
                    <label>Naam: 
                         <input type="text" name="naam" value="">
                    </label><br>   
                    <label>Email: 
                        <input type="email" name="email" value="">
                    </label><br>
                    <label>Bericht: 
                        <textarea name="comment"></textarea>
                    </label><br>
                    
                    <input type="submit" name="Submit" value="Verstuur"><br>
               </form>

            </div>
        </main>   

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
