<header id="masthead" class="shadow">

	<!-- logo -->
	<a href="index.php" class="logoAndTitle">
		<img src="img/logo512.png" alt="">
		<h1>AllergieCheck</h1>
	</a>

	<!-- navigatie -->
	<nav class="main-navigation">
		<ul>
			<li class="navLink <?php print(activeClass($pageName, 'home')); ?>">
				<a href="index.php">Home</a>
			</li>
			<li class="navLink <?php print(activeClass($pageName, 'restaurants')); ?>">
				<a href="restaurants.php">Restaurants</a>
			</li>
			<li class="navLink <?php print(activeClass($pageName, 'over ons')); ?>">
				<a href="over.php">Over ons</a>
			</li>
			<li class="navLink <?php print(activeClass($pageName, 'contact')); ?>">
				<a href="contact.php">Contact</a>
			</li>
			<li class="navLink loginLink">
				<a href="login.php"><span>Inloggen</span></a>
			</li>
		</ul>
	</nav>

</header>
