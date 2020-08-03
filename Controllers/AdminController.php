<?php  
	namespace App\Controllers;
	
	Use App\Models\PostManager;
	Use App\Models\CommentManager;
	Use App\Models\Post;

	class AdminController extends Controller
	{
		//methode de la page d'accueil index
		public function index()
		{
			if (!$_SESSION['email']) {
				header('location: /user/login');
				exit;
			}
			$post = new PostManager;
			$posts = $post->findAll();

			$this->render('admin/index', compact('posts'));
		}

		public function delete($id){
			$post = new PostManager;
			$post->delete($id[0]);
			header("location:/admin");
		}

		public function create(){

			if ($_POST) {
				$post = new Post;
				$post->hydrate([
					'u_id'=> 5,
					'p_author' => $_POST['author'],
					'p_title' => $_POST['title'],
					'p_chapo' => $_POST['chapo'],
					'p_content' => $_POST['content'],
				]);

				$postManager = new PostManager;
				$postManager->create([
					'u_id'=> 5,
					'p_author' => $_POST['author'],
					'p_title' => $_POST['title'],
					'p_chapo' => $_POST['chapo'],
					'p_content' => $_POST['content'],
				]);

				header('location: /admin');
			}
			$this->render('createPost/index');
		}

		public function update($id){
			$postManager = new PostManager;
			$posts = $postManager->find($id[0], 'p_id');

			if ($_POST) {
				$post = new Post;
				$posts = $post->hydrate([
					'u_id'=> 5,
					'p_author' => $_POST['author'],
					'p_title' => $_POST['title'],
					'p_chapo' => $_POST['chapo'],
					'p_content' => $_POST['content'],
				]);

				$postManager = new PostManager;
				$postManager->update($id[0], [
					'u_id'=> 5,
					'p_author' => $_POST['author'],
					'p_title' => $_POST['title'],
					'p_chapo' => $_POST['chapo'],
					'p_content' => $_POST['content'],
				]);

				header('location: /admin');
			}

			$this->render('updatePost/index', compact('posts'));
		}
	}