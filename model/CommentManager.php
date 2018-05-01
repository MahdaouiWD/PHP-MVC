<?php

namespace MWD\Blog\Model;

require_once('model/Manager.php');

class CommentManager extends Manager
{

	public function getComments($postId){

		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'le %d/%m/%Y à %Hh%imin%ss \') comment_date FROM comments WHERE post_id = ? ORDER BY id DESC LIMIT 0,5');
			$req->execute(array($postId));

		return $req;
	}

	public function postComment($postId, $author, $comment){

		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?,?,?, NOW())');
		$affectedLines = $req->execute(array($postId, $author, $comment)); 

		return $affectedLines;
	}
	//requête de mise a jour d'un commentaire
	public function updateComment($newComment, $commentId){

		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET comment = ? WHERE id = ?');
		$req->execute(array($newComment, $commentId));
	}
}
	
