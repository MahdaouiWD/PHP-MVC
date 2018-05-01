<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

use MWD\Blog\Model\PostManager;
use MWD\Blog\Model\CommentManager;


function listPosts(){

	$postManager = new PostManager();
	$posts = $postManager->getPosts();

	require('view/frontend/listPostView.php');

}

function post(){

		$postManager = new PostManager();
		$commentManager = new CommentManager();

		$post = $postManager->getPost($_GET['id']);
		$comments = $commentManager->getComments($_GET['id']);

		require('view/frontend//postView.php');

}

function addComment($postId, $author, $comment){

	$commentManager = new CommentManager();
	$affectedLines = $commentManager->postComment($postId, $author, $comment);

	if($affectedLines == false)
	{
		throw new Exception('Impossible d\'ajouter le commentaire !');

	}
	else
	{
		header('location: index.php?action=post&id='. $postId);
	}
}

// permet d'appeler la page de modification
function updateCommentPage(){

	require('view/frontend/updateCommentView.php');
}

// permet de réaliser la mise à jour 
function updateComment($newComment, $commentId, $postId){

	$commentManager = new CommentManager();
	$commentManager->updateComment($newComment, $commentId);
	header('location:index.php?action=post&id=' . $postId);
}