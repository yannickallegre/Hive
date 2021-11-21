<?php
$title = 'Mon blog';
ob_start();
?>

<h2>Mon super blog</h2>

<p><a href="index.php">Retour à la liste des billets</a></p>

<article>
	<header>
		<h3>
			<?= htmlspecialchars($post['title']) ?>
			<em>le <?= $post['creation_date_fr'] ?></em>
		</h3>
	</header>

	<p>
		<?= nl2br(htmlspecialchars($post['content'])) ?>
	</p>
</article>

<h2>Commentaires</h2>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
	<div class="mb-3">
		<label for="author" class="form-label">Auteur</label>
		<input type="text" id="author" name="author" class="form-control" />
	</div>

	<div class="mb-3">
		<label for="comment" class="form-label">Commentaire</label>
		<textarea id="comment" name="comment" class="form-control"></textarea>
	</div>

	<div class="mb-3">
		<input type="submit" class="btn btn-primary" />
	</div>
</form>

<?php
while ($comment = $comments->fetch())
{
?>
	<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
	<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
<?php
}

$content = ob_get_clean();
require('template.php');
?>
