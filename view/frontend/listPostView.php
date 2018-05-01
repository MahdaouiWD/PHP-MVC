<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

		
<?php
	while ($post = $posts->fetch())
	{
?>
	<div class="news">
		<h3>
			<?= htmlspecialchars($post['title']) ?> 
			<em>le <?= $post['date_creation'] ?></em>
		</h3>
		<p>
			<?= nl2br(htmlspecialchars($post['content'])) ?><br />
			<a href="index.php?action=post&amp;id=<?= $post['id'] ?>">commentaires</a>
		</p>
	</div>	
<?php	
	}
?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>