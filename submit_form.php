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

<!DOCTYPE html>

<html lang="fr">
	<head>
		<!-- En-tête de la page -->
		<!-- Required meta tags -->
		<meta <?php /* Code PHP */ ?> charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <?php include_once('stylesheets.php'); ?>
		<title>Site de recettes</title>
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
                        <?php
                        
                        if (isset($_GET['nom'])) {
                            // Après soumission du formulaire
                            $getNom = htmlspecialchars($_GET['nom']);
                            echo '<p>' . $getNom . '</p>'; // "Mateo21"
                        }

                        // OU

                        if (isset($_POST['nom'])) {
                            $postNom = htmlspecialchars($_POST['nom']);
                            echo '<p>' . $postNom . '</p>'; // "Mateo21"
                        }
                        ?>
                    </main>
				</div>
			</div>

			<?php include_once('footer.php'); ?>
		</div>

        <?php include_once('javascripts.php'); ?>
	</body>
</html>
