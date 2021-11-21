<?php

// Déclaration du tableau des recettes
$recipes = [
	['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
	['Couscous', '[...]', 'mickael.andrieur@exemple.com', false,],
];

session_start();

?>

<!DOCTYPE html>

<html lang="fr">
	<head>
		<!-- En-tête de la page -->
		<!-- Required meta tags -->
		<meta <?php /* Code PHP */ ?> charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<?php include_once('stylesheets.php'); ?>
		<title>Site de recettes - Page d'accueil</title>
	</head>

	<body>
		<div class="container">
			<?php include_once('header.php'); ?>

			<!-- inclusion des variables et fonctions -->
			<?php
				include_once('variables.php');
				include_once('functions.php');
			?>

			<div class="row">
				<div class="col-3">
					<?php include_once('nav.php'); ?>
				</div>

				<div class="col-9">
                    <main>
                        <?php include_once('login.php'); ?>

                        <h2>Site de recettes !</h2>

                        <!-- Si l'utilisateur existe, on affiche les recettes -->
                        <?php if (isset($loggedUser)): ?>
                            <?php foreach(get_recipes($recipes) as $recipe) : ?>
                                <article>
                                    <header>
                                        <h3><?php echo $recipe['title']; ?></h3>
                                    </header>

                                    <div><?php echo $recipe['recipe']; ?></div>

                                    <footer>
                                        <i><?php echo display_author($recipe['author'], $users); ?></i>
                                    </footer>
                                </article>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </main>
				</div>
			</div>

			<?php include_once('footer.php'); ?>
		</div>

		<?php include_once('javascripts.php'); ?>
	</body>
</html>
