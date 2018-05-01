<?php

namespace MWD\Blog\Model;

require_once('model/Manager.php');

class PostManager extends Manager
{

	public function getPosts(){
		
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_creation FROM posts ORDER BY date_creation DESC');

		return $req;
	}

	public function getPost($postId){

		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(date_creation, \'le %d/%m/%Y à %Hh%imin%ss\') date_creation FROM posts WHERE id = ? ');
		$req->execute(array($postId));

		$post = $req->fetch();

		return $post;
	}
}