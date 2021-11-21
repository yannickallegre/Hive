<?php
$title = 'Mon blog';
ob_start();
echo '<p>Erreur : ' . $errorMessage . '</p>';
$content = ob_get_clean();
require('frontend/template.php');
?>
