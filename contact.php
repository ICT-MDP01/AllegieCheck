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
                    <div class="six columns">
                        <label for="naam">
                            <label class="u-full-width">Naam:</label>
                            <input class="u-full-width" type="text" name="naam" value="">
                        </label> 
                    </div>
                    <div class="six columns">
                        <label for="email">
                            <label class="u-full-width">Email:</label>
                            <input class="u-full-width" type="email" name="email" value="">
                        </label>
                    </div>
                    <div class="twelve columns">
                        <label for="comment">
                            <label class="u-full-width">Bericht:</label>
                            <textarea class="u-full-width" name="comment"></textarea>
                        </label>
                    </div>

                    
                    <input class="button-primary" type="submit" name="Submit" value="Verstuur"><br>
               </form>

            </div>
        </main>   

        <?php include "includes/footer.php"; ?>
        
    </body>
</html>
