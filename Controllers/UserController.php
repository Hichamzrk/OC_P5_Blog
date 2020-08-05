<?php 
namespace App\Controllers;
use App\Models\UserManager;
use App\Models\User;

	class UserController extends Controller
	{
		//methode de la page login
		public function login(){
			
			//On affiche la view login
			$this->render('login/index');
			
			//On instancie la classe User et UserManager
			$user = new User; 
			$userManager = new UserManager;

			//On vérifie si les champs ont été remplie
			if (isset($_POST['email']) AND !empty($_POST['email'])) {
				
				$email = strip_tags($_POST['email']);
				$password = $_POST['password'];
				
				//On cherche les données via le email
				$userFind = $userManager->findOneByEmail($email);

				//On vérifie si l'utilisateur éxiste
				if(!$userFind){
				    http_response_code(404);
				    echo "pas ok";
					exit;
				}
				
				//On hydrate les données dans la classe user
				//$user->hydrate($userFind);

				//On vérifie si le password correspond et on créer la session
				if(password_verify($password, $userFind->u_password)){
				
					$_SESSION['email'] = $email;
					header('location: /admin');
				}
			}
			
		}

		
		//methode de logout
		public function logout(){
			unset($_SESSION['email']);
		    header('Location: '. $_SERVER['HTTP_REFERER']);
		    exit;
		}

	}