<?php
session_start();
require 'Autoloader.php';
Autoloader::register();

use app\controller\Authcontroleur;
use app\controller\GADcontroleur;
use app\controller\Paramcontroleur;
use app\controller\RECcontroleur;
use app\App;

if(isset($_GET['p']))
  {
    $p  =  $_GET['p'];
  }
else
  {
    require'app/views/acc/ind.html';
    exit(0);
  }
//---------------------------------------------------------------------------//

if(isset($_SESSION['id']))			//En cas ou l'utilisateur modifier URL , et il n'est pas encore conécté
{
  switch ($p)
  {
    case 'home':
    	$Authcontroleur = new Authcontroleur();
    	$Authcontroleur->logged();
      break;
    case 'connexion':
      $Authcontroleur = new Authcontroleur();
      $Authcontroleur->connexion();
      break;
    case 'deconnexion':
    	$Authcontroleur = new Authcontroleur();
     	$Authcontroleur->deconnexion();
      break;

  	//Change password  or identifiant
      case 'upmyuser':
  		$controleur = new Authcontroleur();
   		$controleur->upmyuser();
      break;


  	//Module Gestion Administrative:
  	//-----------------------------

  	case 'administration':
  		$controleur  =  new GADcontroleur();
  	  $controleur->administration();
  	  break;

  	case 'addemploye':
  		$controleur  =  new GADcontroleur();
  		$controleur->addemploye();
  	  break;

  	case 'upemploye':
  		$controleur  =  new GADcontroleur();
  		$controleur->upemploye($_GET['id']);
  	  break;

  	case 'salaire':
  		$controleur  =  new GADcontroleur();
  		$controleur->afficher_salaire($_GET['id']);
  	  break;

  	case 'contrat_de_travail':
  		$controleur =  new GADcontroleur;
  		$controleur->export_word('Contrat de travail');
  	  break;

    case 'certificat_de_travail':
  		$controleur =  new GADcontroleur();
  		$controleur->export_word('Certificat de travail');
  	break;

    case 'attestation_de_travail':
      $controleur = new GADcontroleur();
      $controleur->export_word('Attestation de travail');
    break;

    case 'cdtdown':
      $controleur = new GADcontroleur();
      $controleur->cdtdown();
    break;


  	//----------------------------

  	//Module Parametres:
  	//-----------------
  	case 'param':

  		$Paramcontroleur = new Paramcontroleur();
  		$Paramcontroleur->upparam();
  	break;
  	case 'adduser':

  		$Paramcontroleur  =  new Paramcontroleur();
  	 	$Paramcontroleur->adduser();

  	break;
  	case 'admincomptes':

  		$Paramcontroleur  =  new Paramcontroleur();
  	 	$Paramcontroleur->admincomptes();

	break;
	case 'upUserPassword':
		$Paramcontroleur  =  new Paramcontroleur();
		$Paramcontroleur->upUserPassword($_GET['id']);
	break;
	case 'upUserType':
		$Paramcontroleur  =  new Paramcontroleur();
		$Paramcontroleur->upUserType($_GET['id']);
	break;
  	case 'upuser':
  		$Paramcontroleur  =  new Paramcontroleur();
  	 	$Paramcontroleur->upuser($_GET['id']);

  	break;
  	case 'uptheme':

  		$Paramcontroleur = new Paramcontroleur();
  	 	$Paramcontroleur->uptheme();
  	break;

    case 'deleteCompte':

      $Paramcontroleur = new Paramcontroleur();
      $Paramcontroleur->deleteCompte($_GET['id']);

    break;

  	// RECRUTEMENTS------------------------

  	case 'recrutement':

  		$controleur  =  new RECcontroleur();
  		$controleur->recrutement();
  	break;

  	case 'addcandidat':

  		$controleur  =  new RECcontroleur();
  		$controleur->addcandidat();
  	break;

  	case 'upcandidat':
  		$controleur = new RECcontroleur();
  		$controleur->upcandidat($_GET['id']);
  	break;

    case 'deleteCandidat':

      $controleur  =  new RECcontroleur();
      $controleur->supprimer($_GET['id']);
    break;
    
    //-----------------

    default:
      require"app/views/error.html";
  }
}
else
{
  $Authcontroleur = new Authcontroleur();
  $Authcontroleur->connexion();
}
