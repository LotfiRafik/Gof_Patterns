<?php
//Gestion Administrative
namespace app\controller;
use app\model\Salaire;
use app\model\Employe;
use app\model\Parametres;

class GADcontroleur extends \core\Controller\controller{

	public function administration()
	{
		$employe = new Employe();
		$liste = $employe->liste();
		//$liste : tableau d'objets  $liste = $data ;
		$this->render('administration',$liste);

	}
	public function addemploye()
	{
		//ne pas oublier de vérifier si tt les champs obligatoires sont rempli ett verifier si les champs sont valide comme Email! Date !...ext
		if(!empty($_POST))
		{
			$this->htmlspecialchars();
			$employe = new Employe();
			//on ajoute l'emloyé pour la premiere fois dans la table employé et on ajoute son salaire dans 'salaire'
			$salaire = new Salaire();
			$tab['matricule'] = $employe->ajouter($_POST); //on méme temps en ajoute l'emloyé on return son matricule
			$tab['salaire'] = $_POST['salaire'];
			$tab['date'] = date("d-m-Y"); //date courante
			$salaire->ajouter($tab);
			//Ajouter contrat de travail
			if (isset($_FILES['cdt']) AND $_FILES['cdt']['error']== 0)
	 		{
	 			$infosfichier = pathinfo($_FILES['cdt']['name']);
				$extension = $infosfichier['extension'];
			 	$dest = 'public/Contrat/'.$tab['matricule'].'.'.$extension ;
			 	move_uploaded_file($_FILES['cdt']['tmp_name'],$dest);
			 }
			//Ajouter CV
			if (isset($_FILES['cv']) AND $_FILES['cv']['error']== 0)
	 		{
	 			$infosfichier = pathinfo($_FILES['cv']['name']);
				$extension = $infosfichier['extension'];
			 	$dest = 'public/CV/'.$tab['matricule'].'.'.$extension ;
			 	move_uploaded_file($_FILES['cv']['tmp_name'],$dest);
			 }
			//---------------------------
			header('Location:?p=administration');
		}
		$this->render('fichemploye');
	}


	public function upemploye($id)
	{
		$employe = new Employe();
		if(!empty($_POST))
		{
			/*en ce moment on a pas encore modifier la table
				pour modifier salaire : on a le new salaire dans $array['salaire'] et l'ancien dans la table
					donc $ancien-salaire = ($this->listec([$id]))[0]->salaire;
						if ( $array['salaire'] != $ancien-salaire ) { salaire = new salaire ; salaire->ajouter() } */
				$this->htmlspecialchars();
				if(!isset($id))
				{
						header('location:?p=error');
				}
				$employe->exist($id);
			  $tabl['id'] = $id;
		  	$anciensalaire = $employe->listec($tabl)[0]->salaire ;
		  	if ( $_POST['salaire'] <> $anciensalaire )  	//Si le gestionaire a modifier le salaire
		  	{
		 		$salaire = new Salaire();
		 		$tab['matricule'] = $id;
				$tab['salaire'] = $_POST['salaire'];
				$tab['date'] = date("d-m-Y");
				$salaire->ajouter($tab);
		  	}

			$employe->modifier($_POST,$id);
			//Ajouter contrat de travail
			if (isset($_FILES['cdt']) AND $_FILES['cdt']['error']== 0)
	 		{
	 			$infosfichier = pathinfo($_FILES['cdt']['name']);
				$extension = $infosfichier['extension'];
			 	$dest = 'public/Contrat/'.$id.'.'.$extension;
			 	$filepath ='public/Contrat/'.$id.'.doc';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
				$filepath ='public/Contrat/'.$id.'.docx';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
				$filepath ='public/Contrat/'.$id.'.pdf';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
			 	move_uploaded_file($_FILES['cdt']['tmp_name'],$dest);
			 }
			//Ajouter CV
			if (isset($_FILES['cv']) AND $_FILES['cv']['error']== 0)
	 		{
	 			$infosfichier = pathinfo($_FILES['cv']['name']);
				$extension = $infosfichier['extension'];
			 	$dest = 'public/CV/'.$id.'.'.$extension;
			 	$filepath ='public/CV/'.$id.'.doc';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
				$filepath ='public/CV/'.$id.'.docx';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
				$filepath ='public/CV/'.$id.'.pdf';
				if(file_exists($filepath))
				{
					unlink($filepath);
				}
			 	move_uploaded_file($_FILES['cv']['tmp_name'],$dest);
			}
			header('Location:?p=upemploye&id='.$id);
		}
		else
		{
			if(!isset($id))
			{
					header('location:?p=error');
			}
			$employe->exist($id);
			$exist = [];
			$filepath = 'public/Contrat/'.$id.'.doc';
			if(file_exists($filepath))
			{
				$exist['cdt']= '';
				$exist['tycdt']= 'doc';
			}
			else
			{
				$filepath = 'public/Contrat/'.$id.'.pdf';
				if(file_exists($filepath))
				{
					$exist['cdt']= '';
					$exist['tycdt']= 'pdf';
				}
				else
				{
					$filepath = 'public/Contrat/'.$id.'.docx';
					if(file_exists($filepath))
					{
						$exist['cdt']= '';
						$exist['tycdt']= 'docx';
					}
				}
			}
			$filepath = 'public/CV/'.$id.'.doc';
			if(file_exists($filepath))
			{
				$exist['cv']= '';
				$exist['tycv']= 'doc';
			}
			else
			{
				$filepath = 'public/CV/'.$id.'.pdf';
				if(file_exists($filepath))
				{
					$exist['cv']= '';
					$exist['tycv']= 'pdf';
				}
				else
				{
					$filepath = 'public/CV/'.$id.'.docx';
					if(file_exists($filepath))
					{
						$exist['cv']= '';
						$exist['tycv']= 'docx';
					}
				}
			}
			$array['id'] = $id;
	 		$data = $employe->listec($array);
		}
		$this->render('fichemploye',$data,$exist);
	}


	public function afficher_salaire($id)
	{
		if(!isset($id))
		{
				header('location:?p=error');
		}
		$employe = new Employe();
		$employe->exist($id);
		$salaire = new Salaire();
		$array['matricule'] = $id;
		$historique =  $salaire->listec($array);
		$array2['id'] = $id;
		$data = $employe->listec($array2);
		$this->render('historique-salaire',$historique,$data);
	}


	public function export_word($file,$date=[])
	{
		if ($file=='Titre de conges')
		$_GET['id'] = $date['id'];
		$employe = new Employe();
		if(!isset($_GET['id']))
		{
				header('location:?p=error');
		}
		$employe->exist($_GET['id']);
		if ($file=='Titre de conges')
		$tab['id'] = $date['id'];
		else $tab['id'] = $_GET['id'];


		$liste = $employe->listec($tab);

		$param= new Parametres();
		$setting=$param->liste();


		$myContent = file_get_contents("public/word/".$file."/REF-".$file.".xml");

		$unNombreUniqueParImageDistincte=1025;
		$imageName=$setting[0]->logo;
		$noImage = 1; //on incrémentera pour chaque image différente
		$extImage = explode(".",$imageName);
		$extImage = $extImage[count($extImage)-1]; //on récupère l'extension de l'image
		$image  = '<w:pict>\n';
		$image .= '<w:binData w:name="wordml://03000'.str_pad($noImage,3,"0",STR_PAD_LEFT).'.'.$extImage.'" xml:space="preserve">';
		$content = file_get_contents($setting[0]->logo);
		$image .= base64_encode($content);
		$image .= '</w:binData>';
		$image .= '<v:shape id="_x0000_i'.$unNombreUniqueParImageDistincte.'" type="#_x0000_t75" style="width:160pt;height:80pt">';
		$image .= '<v:imagedata src="wordml://03000'.str_pad($noImage,3,"0",STR_PAD_LEFT).'.'.$extImage.'" o:title="logo"/>';
		$image .= '</v:shape>\n</w:pict>';

		//On remplace les mots-clés, un à un
		$myContent=str_replace('$id',$liste[0]->id,$myContent);
		$myContent=str_replace('$nom',$liste[0]->nom,$myContent);
		$myContent=str_replace('$prenom',$liste[0]->prenom,$myContent);
		$myContent=str_replace('$naissance',$liste[0]->naissance,$myContent);
		$myContent=str_replace('$adresse',$liste[0]->adresse,$myContent);
		$myContent=str_replace('$poste',$liste[0]->poste,$myContent);
		$myContent=str_replace('$embauche',$liste[0]->embauche,$myContent);
		$myContent=str_replace('$salaire12',($liste[0]->salaire)*12,$myContent);
		$myContent=str_replace('$salaire',$liste[0]->salaire,$myContent);
		$myContent=str_replace('$gerant',$setting[0]->gerant,$myContent);
		$myContent=str_replace('$demission',$liste[0]->demission,$myContent);
		if($file=='Titre de conges'){
		$myContent=str_replace('$nbjour',$date['nbjour'],$myContent);
		$myContent=str_replace('$debut',$date['debut'],$myContent);
		$myContent=str_replace('$fin',$date['fin'],$myContent);
	}

		$myContent=str_replace('$raisonsociale',$setting[0]->raisonsocial,$myContent);//
		$myContent=str_replace('$specialite',$setting[0]->specialite,$myContent);//  |
		$myContent=str_replace('$entadresse',$setting[0]->adress,$myContent);//		 |
		$myContent=str_replace('$rc',$setting[0]->rc,$myContent);//                  |  MAJISCULE
		$myContent=str_replace('$wilaya','ALGER',$myContent);//						 |
		$myContent=str_replace('$pays','ALGERIE',$myContent);//						 |
		$myContent=str_replace('$date',date('d-m-Y'),$myContent);



		$myContent=str_replace('$logo',$image,$myContent);   // on introduit l'image

		$filepath = 'public/word/'.$file.'/'.$file.'_'.$liste[0]->nom.' '.$liste[0]->prenom.'.doc';

		// Vérifie que l'on peut écrire dans le fichier if(!is_writable($filepath)) exit();// Vérifie que l'on peut ouvrir le fichier
		if (!$handle = fopen($filepath,'w'))
		exit("Impossible d'ouvrir le fichier ($filepath)");
		if (fwrite($handle, $myContent) === FALSE)
		exit("Impossible d'écrire dans le fichier ($filepath)");
		$filename = $file.'_'.$liste[0]->nom.' '.$liste[0]->prenom.'.doc';
	  fclose($handle);
		if($file!='Titre de conges'){
		ob_start();
		header ('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		header('Content-Description: File Transfer');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		ob_clean();
		readfile($filepath);
	}
	}



	public function cdtdown()
	{
		if(!isset($_GET['id']) OR !isset($_GET['t']) OR !isset($_GET['ty']) )
		{
				header('location:?p=error');
		}
		$employe = new Employe();
		$employe->exist($_GET['id']);
		$tab['id'] = $_GET['id'];				//ne pas oublie de sécuriser l'id !!
		$employe = new employe();
		$info = $employe->listec($tab);	//id nom prenom post date info tableau d'objet ! dans ce cas un seul objet
		if($_GET['t'] == 'cdt')
		{
			$dossier = 'Contrat/';
			$filename = 'Contrat de travail : ' .$info[0]->nom.'-'.$info[0]->prenom.'.'.$_GET['ty'];
		}
		elseif($_GET['t'] == 'cv')
		{
			$dossier = 'CV/';
			$filename = 'CV : ' .$info[0]->nom.'-'.$info[0]->prenom.'.'.$_GET['ty'];
		}
		$filepath ='public/'.$dossier.$_GET['id'].'.'.$_GET['ty'];
		if(file_exists($filepath))
		{
			ob_start();
			header('Content-Description: File Transfer');
			if($_GET['ty'] === 'pdf')
			{
				header('Content-Type: application/pdf');
				header('Content-Disposition: inline; filename="'.$filename.'"'); //Nom du fichier
			}
			else
			{
				header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
				header('Content-Disposition: attachment; filename="'.$filename.'"'); //Nom du fichier
			}
		  ob_clean();
			readfile($filepath);
		}
		else {
			header('location:?p=error');
		}
	}
}
