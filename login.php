<!doctype html>
<html>

	<?php include "templates/head.php" ?>

	<body>

    	<?php include "templates/header.php" ?>

    	<!-- content -->
        <main id="content">
            <div class="container">
		        <h1>Inloggen</h1>

				<form action="" method="post">
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

            </div> <!-- /.container -->
        </main>

        <?php include "templates/footer.php" ?>

</body>
</html>
