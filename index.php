<?php

// Déclaration du tableau des recettes
$recipes = [
	['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
	['Couscous', '[...]', 'mickael.andrieur@exemple.com', false,],
];

session_start();

// retenir l'email de la personne connectée pendant 1 an
setcookie(
	'LOGGED_USER',
	'laurene.castor@exemple.com',
	[
		'expires' => time() + 365*24*3600,
		'secure' => true,
		'httponly' => true,
	]
);

require('controller/frontend.php');

try
{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
		}
		elseif ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				post();
			}
			else {
				// Erreur ! On arrête tout, on envoie une exception, donc on saute directement au catch
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
		elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (!empty($_POST['author']) && !empty($_POST['comment'])) {
					addComment($_GET['id'], $_POST['author'], $_POST['comment']);
				}
				else {
					throw Exception('Tous les champs ne sont pas remplis !');
				}
			}
			else {
				throw new Exception('Aucun identifiant de billet envoyé');
			}
		}
	}
	else {
		listPosts();
	}
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
	$errorMessage = $e->getMessage();
	require('view/errorView.php');
}

// Chargement de la classe
require_once("Maison.php");

// Instanciation d'un objet
$maisonDeMathieu = new Maison();
// Instanciation d'un autre objet
$maisonDeJulie = new Maison();

$maisonDeMathieu->ouvrirPorte();
$maisonDeMathieu->fermerPorte();
$maisonDeMathieu->modifierTemperature(21);

$maisonDeJulie->modifierTemperature(55);
