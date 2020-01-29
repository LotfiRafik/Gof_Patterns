<?php
namespace app\model;
use app\controller\Authcontroleur;
use core\DataBase\dataBase;


class Employe extends \core\Model\table {

	protected $table = "employe";

	public function __construct()
	{
		parent::__construct();
	}


	//Recupuration d'un tableau d'objets ( la liste des employés)
	public function liste()
	{
		//TEST PATRON SIGLETON
		
		$data = dataBase::getInstance()->query('SELECT * FROM '.$this->table);
		echo "<h2>SINGLETON</h2>";
		echo "<br>ID de la premiere connexion : SELECT CONNECTION_ID() <br>";
		print_r(dataBase::getInstance()->query('SELECT CONNECTION_ID()'));
		$this->db->query('SELECT * FROM '.$this->table);
		echo "<br>ID de la 2éme connexion : SELECT CONNECTION_ID()<br>";
		print_r(dataBase::getInstance()->query('SELECT CONNECTION_ID()'));
		exit(0);


		//DATA TABLEAU D'OBJETS
		return $data;
	}

	public function listec($array=[])
	{
		$data = $this->select($array);
		return $data;
	}

	 //Ajouter un employé
	public function ajouter($array=[])
	{
		$this->insert($array);
		$obj = $this->db->query('SELECT MAX(id) AS id FROM '.$this->table); //recupérer l'id de l'employé ajouter
		return ($obj[0]->id);
	}

	//Modification d'un employé
	public function modifier($array=[],$id)
	{
		$this->update($array,$id);
	}

	public function liste_filtrer($filtre)
	{
		$datas = $this->db->query('SELECT * FROM '.$this->table.' ORDER BY '.$filtre.'');
		return $datas;
	}



}
