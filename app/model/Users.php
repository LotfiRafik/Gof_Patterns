<?php

namespace app\model;

class Users extends \core\Model\table {

	protected $table = "users";

	public function __construct()
	{
		parent::__construct();
		
	}

	public function connexion($array=[])
	{
			//array[] <=> identifiant & password
			$data = $this->select($array);
			if($data)		//if password and username exist on return les infos de cet utilisateur (Sous forme d'un 																									objet)
			{
			 	return ($data[0]);
			}
			return $data;	//sinon on return 'false'
	}
	public function listec($array=[])
	{
		$data = $this->select($array);
		return $data;
	}
	public function liste()				//Return tt les comptes
	{
		$data = $this->db->query('SELECT * FROM users');
		//DATA TABLEAU D'OBJETS
		return $data;
	}

	public function modifier($array=[],$id)		//Modification soit d'idendifiant ou mdp ou type (admin/gest)
	{
		$this->update($array,$id);
	}

	public function ajouter($array=[])		//Ajout d'un new compte 'identifiant password type'
	{
		$this->insert($array);
	}

	public function deleteCompte($id)
	  {
	    $array['id'] = $id;
	    $this->delete($array);
	  }
 }
