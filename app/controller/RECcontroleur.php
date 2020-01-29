<?php
namespace app\controller;
use app\model\Candidat;
use app\model\Parametres;

class RECcontroleur extends \core\Controller\controller {

	public function update(){

		$candidat = new Candidat();
		$candidat = $candidat->getLastInsertedCandidat();
		$body = "Votre candidature a été enregisté :<br>
					Nom:".$candidat->nom." <br> 
					Prenom :".$candidat->prenom." <br> 
					Email :".$candidat->email." <br> 
					Salaire :".$candidat->salaire." <br> 
					Poste :".$candidat->poste." <br> 	
					";
		$this->sendMail('lotfibouchafa19@gmail.com',$candidat->email,'Observer Pattern',$body);



		echo "<h1>OBSERVER</h1><br>";
		echo "<h3>Subject : La classe Table</h3><br>";
		echo "<h3>Observer : La classe Controller</h3><br>";
		echo "<h3>Concrete-Subject : La classe Candidat</h3><br>";
		echo "<h3>Concrete-Observer : La classe RECcontroleur</h3><br>";

		echo "<a href='?p=recrutement'>Retour</a>";
		exit(0);

	}


	public function recrutement()
	{
		$candidat = new Candidat();
		$liste = $candidat->liste();
		$this->render('recrutement',$liste);
	}

	public function addcandidat()
	{
		if (!empty($_POST))
		{
			$this->htmlspecialchars();

			$candidat = new Candidat();
			$candidat->ajouter($_POST);
			header('Location:?p=recrutement');
		}
		$this->render('fichecandidat');

	}

	public function upcandidat($id)
	{
		if(!isset($id))
		{
				header('location:?p=error');
		}
		$candidat = new Candidat();
		$candidat->exist($id);
		if (!empty($_POST))
		{
			$this->htmlspecialchars();

			$candidat->modifier($_POST,$id);
			header('Location:?p=upcandidat&id='.$id.'');
		}
		else
		{
			$array['id'] = $id;
	 		$data = $candidat->listec($array);
		}
		$this->render('fichecandidat',$data);

	}

	public function supprimer($id)
	{
		if(!isset($id))
		{
			header('location:?p=error');
		}
		$candidat = new Candidat();
		$candidat->exist($id);
		$candidat->supprimer($id);
		header('location:?p=recrutement');

	}


	
}
