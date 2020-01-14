<?php
namespace app\controller;
use app\model\Candidat;
use app\model\Parametres;

class RECcontroleur extends \core\Controller\controller {


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
