<?php $title = 'Modification du commentaire'; ?>
<?php ob_start(); ?>
<fieldset>
	<legend>Nouveau commentaire</legend>
	<form method="post" action="index.php?action=updateComment&amp;commentId=<?= $_GET['commentId'] ?>&amp;postId=<?= $_GET['postId'] ?>">
		<textarea name="newComment" rows="5" cols="50"></textarea><br/>
		<input type="submit" name="Valider"/>
	</form>
</fieldset>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>