<!-- Affichage -->

<!-- affichageAccueil.php -->
<!DOCTYPE html>

<html lang="fr">
	<head>
		<!-- En-tête de la page -->
		<!-- Required meta tags -->
		<meta <?php /* Code PHP */ ?> charset="UTF-8" :>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<?php include_once('stylesheets.php'); ?>
		<title><?= $title ?></title>
	</head>

	<body>
		<div class="container">
			<?php include_once('header.php'); ?>

			<!-- inclusion des variables et fonctions -->
			<?php
				include_once('variables.php');
			?>

			<div class="row">
				<div class="col-3">
					<?php include_once('nav.php'); ?>
				</div>

				<div class="col-9">
					<main>
                        <?= $content ?>
					</main>
				</div>
			</div>

			<?php include_once('footer.php'); ?>
		</div>

		<?php include_once('javascripts.php'); ?>
	</body>
</html>
