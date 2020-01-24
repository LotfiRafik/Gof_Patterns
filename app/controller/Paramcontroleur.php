<?php
namespace app\controller;
use app\model\Parametres;
use app\model\Users;

class Paramcontroleur extends \core\Controller\controller{

	public function update(){
		
	}

	public function __construct()
	{
	    if($_SESSION['type'] != 'admin')
	    {
		 	header('location:?p=home');
	    }
	}

 	public function upparam()
 	{
 		$param = new Parametres();
 		$data = $param->liste();		//Table parametres

 		if(!empty($_POST))
 		{
			$this->htmlspecialchars();

 			$_POST['raisonsocial']=strtoupper($_POST['raisonsocial']);
 			$_POST['specialite']=strtoupper($_POST['specialite']);
 			$_POST['adress']=strtoupper($_POST['adress']);
 			$param->modifier();
 			header('location:?p=param');
 		}
 		$this->render('parametres',$data);

 	}

 	public function admincomptes()
	 {
	 	$users = new Users();
	 	$comptes = $users->liste();
	  $this->render('gerer-comptes',$comptes);
	 }


	 public function adduser()
	 {

	 	if(!empty($_POST))
	 	{
			$this->htmlspecialchars();

			$error = [];
		 	$users = new Users();

		 	//Verifier qu'aucun compte exist avec le méme nom
		 	$array['identifiant'] = $_POST['identifiant'];
			$data = $users->select($array);
			if($data)
			{
			 	$error['exist'] = 'exist';
			}
		 	if($_POST['Rpassword'] != $_POST['password'])			//ne pas oublier que le champ password n'est pas vide
		 	{
		 		$error['pass'] = 'pass';
		 	}
		 	if(!empty($error))				//On affiche que le mot de passe retapé est faux
		 	{
			 	$comptes = $users->liste();
			  $this->render('gerer-comptes',$comptes,$error);
		 	}
		 	else 					//Sinon on ajoute le compte dans la table users
		 	{
		 	 	/*supprimer cette case car le tableau en entré de la fonction ajouter doit contenir juste les infos de la table */
		 	 	unset($_POST['Rpassword']);
				$_POST['password'] = $this->hashPassword($_POST['password']);
		 	 	$users->ajouter($_POST);
		 	 	header('Location:?p=admincomptes');
		 	}
		}
		else
		{
	 	 	header('Location:?p=admincomptes');
		}
	 }

	public function upUserType($id){
		
		if(!isset($id))
		{
				header('location:?p=error');
		}
		$users = new Users();
		$users->exist($id);
		$tab['id'] = $id;
		$tab = $users->listec($tab);
 		$error = [];
 	 	if(!empty($_POST))
 	 	{
			$this->htmlspecialchars();
 	 		$users = new Users();
 	 		unset($_POST['modifier']);
 	 		if($id === $_SESSION['id'])
 			{
 			 	$_SESSION['type'] = $_POST['type'];
 		 	}
 	 		$users->modifier($_POST,$id);
 	 		header('Location:?p=admincomptes');
 		}
 		else
 		{
 			$this->render('update-compte',$tab);
 		}

	}
	public function upUserPassword($id){
		if(!isset($id))
		{
				header('location:?p=error');
		}
		$users = new Users();
		$users->exist($id);
		$tab['id'] = $id;
		$tab = $users->listec($tab);
 		$error = [];
 	 	if(!empty($_POST))
 	 	{
			$this->htmlspecialchars();
 	 		$users = new Users();
 			if($_POST['Rpassword'] != $_POST['password'])
 			{
 				$error['pass2'] = 'pass2';
 			}
 			if(!empty($error))				//On affiche que le mot de passe retapé est faux
 			{
 			 	$this->render('update-compte',$tab,$error);
 			}
 			else
 			{
 			 	unset($_POST['Rpassword']);
 			 	unset($_POST['modifier']);
 			 	if($id === $_SESSION['id'])
 		 	 	{
 		 	 		$_SESSION['id'] = $id;
 		 	 	}
				$_POST['password'] = $this->hashPassword($_POST['password']);
 		 	 	$users->modifier($_POST,$id);
 		 	 	header('Location:?p=admincomptes');
 		 	}
 		}
 		else
 		{
 			$this->render('update-compte',$tab);
 		}
	}

	public function uptheme()					//Update theme
		{
			if(!empty($_POST) AND isset($_POST))
	 		{
	 			$this->htmlspecialchars();
	 			unset($_POST['logo']);
	 			unset($_POST['imgac']);
	 			if (isset($_FILES['logo']) AND $_FILES['logo']['error']== 0)
			 	{
					$infosfichier = pathinfo($_FILES['logo']['name']);
					$extension = $infosfichier['extension'];
							 		// Testons si l'extension est autoris�e
					if (in_array($extension, array('jpg', 'jpeg', 'gif', 'png')))
					{
						if ($_FILES['logo']['size'] <= 2000000)
						{
					 		$dest = 'public/theme/logo.'.$extension;
					 		move_uploaded_file($_FILES['logo']['tmp_name'],$dest);
					 		$_POST['logo'] = 'public/theme/logo.'.$extension ;
				 		}
				 	}
			 	}

			 	$param = new Parametres();			//Table parametres
				$img = $param->getimg()[0]->imgacueille;
				if(empty($img))
				{
					$img = 'public/theme/imgac1.jpg?public/theme/imgac2.jpg?public/theme/imgac3.jpg';
				}
				$img = explode('?',$img);

			 	for($i=0;$i<$param->getNbImgAcc();$i++)
			 	{
				 	if (isset($_FILES['imgac'.$i]) AND $_FILES['imgac'.$i]['error']== 0)
				 	{
						$infosfichier = pathinfo($_FILES['imgac'.$i]['name']);
						$extension = $infosfichier['extension'];
								 		// Testons si l'extension est autoris�e
						if (in_array($extension, array('jpg', 'jpeg', 'gif', 'png')))
						{
							if ($_FILES['imgac'.$i]['size'] <= 2000000)
							{
						 		$dest = 'public/theme/imgac'.$i.'.'.$extension;
						 		move_uploaded_file($_FILES['imgac'.$i]['tmp_name'],$dest);
						 		$img[$i-1] = $dest;
						 	}
					 	}
				 	}
				}
				$img[$param->getNbImgAcc()] = $_POST['diapo'];
				$_POST['imgacueille'] = implode('?',$img);

			 	if(empty($_POST['theme']))  	  { unset($_POST['theme']);}
			 	if(empty($_POST['msgacueille']))  { unset($_POST['msgacueille']);}
			 	unset($_POST['diapo']);
	 			$param->modifier();
	 			header('location:?p=uptheme');
	 		}
			$this->render('theme');
		}

		public function deleteCompte($id)
		{
			if(!isset($id))
			{
				header('location:?p=error');
			}
			if($_SESSION['id'] != $id)			//L'admin ne peut supprimer son  compte ;)
			{
				$users = new Users();
				$users->exist($id);
				$users->deleteCompte($id);
			}
			header('location:?p=admincomptes');		//Boite de dialogue pour informer l'admin qu'il ne peut pas supprimer son compte

		}

}

