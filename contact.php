<!doctype html>
<html>
    
    <?php include "templates/head.php" ?>

    <body>
    
        <?php include "templates/header.php" ?>
        <!-- content -->
        
        <div class="container underNav">
            <h1>Contact</h1>

            <p>invultekst contactgegevens voor eigenaar site(moet nog komen)</p>
            
            <p>Laat hier uw mening achter of geef uw feedback</p>
            <div class="bericht">
            <p>Heb je vragen of kritiek? of wil je gewoon je mening achterlaten vul dan dit formulier in of stuur mij een email!</P>
            </div>
            
            
            <form method="get" action="contact.php">
                 Naam: <input type="text" name="naam" value=""><br>   
                 Email <input type="email" name="email" value=""><br>
                 
                 Bericht: <textarea name="comment"></textarea><br>
                
                 <input type="submit" name="Submit" value="Verstuur"><br>
                
               
                
           </form>
       <div class="afbeelding">
        <img src="http://blog.trello.com/wp-content/uploads/2012/11/image49860831.png" alt="" height="250" width="350">
       </div>



       </div>
              
        	
        <?php include "templates/footer.php" ?>
        
    </body>
</html>
