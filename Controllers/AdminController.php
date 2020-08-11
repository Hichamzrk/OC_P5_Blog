<?php  
	namespace App\Controllers;
	
	Use App\Models\PostManager;
	Use App\Models\CommentManager;
	Use App\Models\TokenManager;
	Use App\Models\Comment;
	Use App\Models\Post;

	class AdminController extends Controller
	{
		
		/**
		 * Affiches les articles
		 */
		public function index()
		{
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}
			$post = new PostManager;
			$posts = $post->findAll();

			$this->render('admin/index', compact('posts'));
		}
		
		/**
		 * Supprime un article
		 * @param  [paramètre]
		 */
		public function delete($proprety){
			TokenManager::checkToken($proprety[1]);
			
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}
			$id = strip_tags($proprety[0]);

			$post = new PostManager;
			$post->delete($id, 'p_id');
			
			header("location:/admin");
		}
		
		/**
		 * Créer un article
		 */
		public function create(){
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}

			if (!empty($_POST) AND !in_array('', $_POST)) {
				
				TokenManager::checkToken($_POST['token']);
				
				$post = new Post;
				$postManager = new PostManager;

				$filter = $postManager->filter();
				$donnee = filter_input_array(INPUT_POST, $filter);

				$post->hydrate($donnee);

				$postManager->createPost($post);
				
				header('location: /admin');
			}
			$this->render('createPost/index');
		}

		/**
		 * Modifie un article
		 * @param  [paramètre]
		 */
		public function update($proprety){
			
			$postManager = new PostManager;
			$verifyExist = $postManager->findBy(['p_id' => $proprety[0]]);
			
			if (!$_SESSION['user'] OR empty($verifyExist)) {
			header('location: /user/index');
			exit;
			}

			$id = strip_tags($proprety[0]);

			$posts = $postManager->find($id, 'p_id');

			if (!empty($_POST) AND !in_array('', $_POST)) {
				TokenManager::checkToken($_POST['token']);

				$filter = $postManager->filter();
				$donnee = filter_input_array(INPUT_POST, $filter);

				$post = new Post;
				$post->hydrate($donnee);

				$postManager->updatePost($id, $post);

				header('location: /admin');
			}

			$this->render('updatePost/index', compact('posts'));
		}

		/**
		 * Valide un commentaire
		 * @param  [paramètre]
		 */
		public function updateComment($proprety){
			
			TokenManager::checkToken($proprety[1]);
			
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}

			$id = strip_tags($proprety[0]);

			$comment = new Comment;
			$comments = $comment->hydrate(['c_validation' => 1]);

			$commentManager = new CommentManager;
			$commentManager->updateComment($id, $comment);

			header('location: /admin/comment');
		}

		/**
		 * Valide un commentaire
		 */
		public function comment(){
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}

			$comment = new CommentManager;
			$comments = $comment->findBy(['c_validation' => 0]);

			$this->render('comments/index', compact('comments'));
		}

		public function deleteComment($proprety){
			TokenManager::checkToken($proprety[1]);
			
			if (!$_SESSION['user']) {
				header('location: /user/index');
				exit;
			}
			$id = strip_tags($proprety[0]);

			$comment = new CommentManager;
			$comment->delete($id, 'c_id');
			
			header("location:/admin/comment");
		}
	}