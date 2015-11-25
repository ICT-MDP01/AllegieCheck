<?php



?>


<header id="masthead" class="shadow">

	<!-- logo -->
	<a href="index.php" class="logoAndTitle">
		<img src="img/logo512.png" alt="">
		<h1>Allergiecheck</h1>
	</a>

	<!-- navigatie -->
	<nav class="main-navigation">
		<ul>
			<li>
				<a href="index.php" class=<?php printActiveClass($pageName, "Home") ?> >Home</a>
			</li>
			<li>
				<a href="restaurants.php" class=<?php printActiveClass($pageName,"Restaurants") ?> >Restaurants</a>
			</li>
			<li>
				<a href="contact.php" class=<?php printActiveClass($pageName,"Contact") ?> >Contact</a>
			</li>
			<li>
				<a href="over.php" class=<?php printActiveClass($pageName,"Over ons") ?> >Over ons</a>
			</li>
			<li>
				<a href="login.php" class=<?php printActiveClass($pageName,"Inloggen") ?> >Inloggen</a>
			</li>
		</ul>
	</nav>

</header>
