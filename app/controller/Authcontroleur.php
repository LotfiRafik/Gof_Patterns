<?php
namespace app\controller;
use app\model\Users;
use app\model\Parametres;

class Authcontroleur extends \core\Controller\controller {

	public function update(){
		
	}

	public function connexion()
	{
		if(isset($_SESSION['id']))			//Si l'utilisateur est connecté au site
		{
			header('Location:?p=home');			//Afficher le site
		}
		$error = false;
		if(!empty($_POST) AND isset($_POST))			//Si l'utilisateur a rempli les informations
		{
			$_POST['password'] = $this->hashPassword($_POST['password']);
			$users=new users();
			$data = $users->connexion($_POST);
			if($data)					//Si les infos rempli sont juste
			{
				$_SESSION['id'] = $data->id;			//on sauvgarde tt ces données en cas ou on aura besion plutard
				$_SESSION['type'] = $data->type;
				$_SESSION['identifiant'] = $data->identifiant;
				$_SESSION['password'] = $data->password;
				header('Location:?p=home');			//Afficher le site
			}
			else 					//sinon
			{
				$error = true;
			}
		}
		require 'app/views/connexion/connexion.php';
	}

	public function logged()
	 {
	 	if(!isset($_SESSION['id']))			//Si l'utilisateur n'est pas connecté au site
		{
			header('location:?p=connexion');		//Afficher formulaire de login
		}
		$parametres = new Parametres ;
		$param = $parametres->liste();
		$this->render('home',$param);										//Sinon si il a déja connecté on affiche le site
	 }

	 public function deconnexion()
	 {
	 	session_destroy();
	 	header('location:?p=connexion');
	 }

	public function upmyuser()					//Update password  or identifiant user
	{
	 	if(!empty($_POST) AND isset($_POST))
	 	{
	 		$users = new users();
		 	if($_POST['modifier'] == 'password')
		 	{
				$_POST['old-password'] = $this->hashPassword($_POST['old-password']);
			 	if($_POST['old-password'] != $_SESSION['password'])
				{
			 		$error['old'] = 'old';
			 	}
				if($_POST['Rpassword'] != $_POST['password'])
				{
			 		$error['new'] = 'new';
			 	}
			 	if(!empty($error))
				{
					echo json_encode($error);
				}
				else
				{
			 	 	unset($_POST['Rpassword']);
					unset($_POST['modifier']);
			 	 	unset($_POST['old-password']);
					$_POST['password'] = $this->hashPassword($_POST['password']);
					$users->modifier($_POST,$_SESSION['id']);
					$_SESSION['password'] = $_POST['password'];
			 	 	header('Location:?p=upmyuser');
		 		}
		 	}
		 	elseif ($_POST['modifier'] == 'identifiant')
		 	{
		 		unset($_POST['modifier']);
		 		$users = new Users();
		 		$array = [];
			 	//Verifier qu'aucun compte exist avec le méme nom
			 	$array['identifiant'] = $_POST['identifiant'];
				$data = $users->select($array);
				if($data!=FALSE)
				{
				 	$error['exist'] = 'exist';
				 	echo json_encode($error);
				}
				else
				{
					$users->modifier($_POST,$_SESSION['id']);
					$_SESSION['identifiant'] = $_POST['identifiant'];
					header('Location:?p=upmyuser');
				}

		 	}
		}
	}

}
