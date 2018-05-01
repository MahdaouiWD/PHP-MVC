<?php
require('controler/frontend.php');

try
{
	if(isset($_GET['action']))
	{
		switch($_GET['action'])
		{
			case 'listPosts':
				listPosts();
			break;

		
			case 'post':
		
				if(isset($_GET['id']) && $_GET['id'] > 0)
				{
					post();
				} 
				else 
				{
					throw new Exception('aucun idemtifiant de billet envoyé');
					  
				}
			break;
		
			case 'addComment':
		
				if(isset($_GET['id']) && $_GET['id'] > 0)
				{
					if(!empty($_POST['author']) && !empty($_POST['comment']))
					{
						addComment($_GET['id'], $_POST['author'], $_POST['comment']);
					}
					else
					{
						throw new Exception('tous les champs ne sont pas remplis !');
					}
				}
				else
				{
					throw new Exception('aucun identifiant de billet envoyé');
				}
			break;
			// fait appel au controleur qui fait appel a la page "updateComment.view.php"
			case 'updateCommentPage':

				if(isset($_GET['commentId']) && isset($_GET['postId']) && $_GET['commentId'] > 0 && $_GET['postId'] > 0)
				{
					updateCommentPage();
				}
				else
				{
					throw new Exception('aucun identifiant de commentaire envoyé');
				}

			break;

			//fait appel au controleur qui permettra de réaliser la mise â jour
			case 'updateComment':

				if(isset($_GET['commentId']) && isset($_GET['postId']) && $_GET['commentId'] > 0 && $_GET['postId'] > 0)
				{
					if(!empty($_POST['newComment']))
					{
						updateComment($_POST['newComment'], $_GET['commentId'], $_GET['postId']);
					}
					else
					{
						throw new Exception('le champ commentaire n\'est pas remplis');
						
					}
				}
				else
				{
					throw new Exception('aucun identifiant de commentaire envoyé');
				}

			default :
				listPosts();
		}
	}
	else
	{
		listPosts();
	}
}
catch (Exception $e)
{
	echo 'Erreur : ' . $e->getMessage();
}
