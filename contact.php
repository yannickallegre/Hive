<?php

// Déclaration du tableau des recettes
$recipes = [
	['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
	['Couscous', '[...]', 'mickael.andrieur@exemple.com', false,],
];

$has_session = session_status() == PHP_SESSION_ACTIVE;

if (!$has_session) {
    session_start();
}

?>

<!-- contact.php -->
<!DOCTYPE html>

<html lang="fr">
	<head>
		<!-- En-tête de la page -->
		<!-- Required meta tags -->
		<meta <?php /* Code PHP */ ?> charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<?php include_once('stylesheets.php'); ?>
		<title>Site de recettes - Formulaire de Contact</title>
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
                        <h2>Contactez nous</h2>

                        <form>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
								<div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
							</div>

							<div class="mb-3">
								<label for="message" class="form-label">Votre message</label>
								<textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
							</div>

							<div class="mb-3">
                            	<button type="submit" class="btn btn-primary">Envoyer</button>
							</div>
                        </form>
                    </main>
				</div>
			</div>

			<?php include_once('footer.php'); ?>
		</div>

		<?php include_once('javascripts.php'); ?>
	</body>
</html>
