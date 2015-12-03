<?php 

// pageinfo
$pageName = "inloggen";

?>

<!doctype html>
<html>

	<?php include "includes/head.php"; ?>

	<body>

    	<?php include "includes/header.php"; ?>
		
    	<!-- content -->
        <main id="content">
            <div class="container">
		        <h1>Inloggen</h1>
				
				<?php
				
				if(isset($_SESSION['email'])){
					header("location: index.php");
				}
				
				else {
					
					if(isset($_POST['email'], $_POST['password'])){
				
						$sql = "SELECT email,  password FROM gebruiker WHERE email=:email AND password=:password";
						$stmt = $pdo->prepare($sql);
						$stmt->bindParam(':email', $_POST['email']);
						$stmt->bindParam(':password', $_POST['password']);
						$stmt->execute();

						if($row = $stmt->fetch()){
						$_SESSION['gebruiker_id'] = $row['gebruiker_id'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['category'] = $row['category'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['voornaam'] = $row['voornaam'];
						$_SESSION['achternaam'] = $row['achternaam'];
						header("Location: index.php");
						}
						
						else {
						print "FATALE ERROR, GEEN TOEGANG";
						}	
					} ?>
					
					<form action="login.php" method="post">
					
						<div>
							<label for="email">Emailadres:</label>
							<input name="email" type="email" id="email">
						</div>
					
						<div>
							<label for="password">Wachtwoord:</label>
							<input name="password" type="password" id="password">
						</div>
					
						<div>
							<input type="submit" value="Inloggen">
						</div>
					</form>
					
					<a href="registreren.php">registreren</a>
				<?php } ?>
            </div> <!-- /.container -->
        </main>

        <?php include "includes/footer.php"; ?>

</body>
</html>
