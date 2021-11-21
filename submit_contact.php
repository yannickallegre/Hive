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
		<title>Site de recettes - Demande de contact reçue</title>
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

                        if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !isset($_POST['message']) && !empty($_POST['message']))
                        {
                            echo('<p>Il faut un email et un message valides pour soumettre le formulaire.</p>');
                        }
                        else
                        {
                            $email = htmlspecialchars($_POST['email']);
                            $message = strip_tags(htmlspecialchars($_POST['message']));
                        ?>
                            <h2>Message bien reçu !</h2>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rappel de vos informations</h5>

                                    <p class="card-text"><b>Email</b> : <?php echo $email ?></p>
                                    <p class="card-text"><b>Message</b> : <?php echo $message ?></p>
                                </div>
                            </div>
                        <?php
                        }

                        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
                        if (isset($_FILES['screenshot']) AND $_FILES['screenshot']['error'] == 0)
                        {
                            // Testons si le fichier n'est pas trop gros
                            if ($_FILES['screenshot']['size'] <= 1000000)
                            {
                                // Testons si l'extension est autorisée
                                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                                $extension = $fileInfo['extension'];
                                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                                if (in_array($extension, $allowedExtensions))
                                {
                                    // On peut valider le fichier et le stocker définitivement
                                    move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                                    echo "<p>L'envoi a bien été effectué !</p>";
                                }
                            }
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
