<?php $title = 'Commentaires de mon blog' ?>

<?php ob_start(); ?>

<h1>Mon super blog !</h1>
<p><a href="index.php?action=listPosts">Retour à la liste des billets</a></p>
	
<div class="news">
	<h3><?= htmlspecialchars($post['title']) . ' <em>' . $post['date_creation'] . '</em>' ?></h3>
	<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
</div>
<h2>Commentaires</h2>
<?php
	while($comment = $comments->fetch())
	{
?>
		<div>
			<p>
                <?= '<strong>' . htmlspecialchars($comment['author']) . '</strong>' . ' ' . $comment['comment_date'] ?>
                
                <!--ajoute du lien qui permet de modifier le commentaire-->
                (<a href="index.php?action=updateCommentPage&amp;commentId=<?= $comment['id'] ?>&amp;postId=<?= $comment['post_id'] ?>">Modifier</a>)
            </p>
			<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
		</div>
<?php
	}
?>
<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


