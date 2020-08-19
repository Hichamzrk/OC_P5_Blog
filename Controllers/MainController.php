<?php  
	namespace App\Controllers;
	use App\Models\Post;
	use App\Models\PostManager;

	class MainController extends Controller
	{
		/**
		 * Page d'accueil
		 */
		public function index()
		{	
			$postManager = new PostManager;
			$post = $postManager->findLast();

			//Systeme de mail
			if (!empty($_POST) AND !in_array('',$_POST)) {
				$name = strip_tags(htmlspecialchars($_POST['firstname']));
        		$email = strip_tags(htmlspecialchars($_POST['lastname']));
        		$message = strip_tags(htmlspecialchars($_POST['content']));

		        // Création du mail et envoi du message
		        $to      = 'exemple@test.com';
		        $subject = "Blog de Exemple :  $name";
		        $message = "Vous avez reçu un message depuis le formulaire de contact du Blog.\n\n"."Détails :\n\nNom : $name\n\nMessage:\n$message";
		        $headers = array(
		        'From' => $email,
		        'Reply-To' => 'noreply@mirko-venturi.com',
		        'X-Mailer' => 'PHP/' . phpversion()
		        );
		   
		        mail($to, $subject, $message, $headers);
			}
			
			$this->render('main/index', compact('post'));
		}
	}