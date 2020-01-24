<?php

namespace app\model;
use app\controller\RECcontroleur;

class Candidat extends \core\Model\table{

	protected $table = "candidat";

	public function __construct()
	{
		parent::__construct();
		$this->observer = new RECcontroleur();
	}


	public function liste()
	{
		$data = $this->db->query('SELECT * FROM '.$this->table);
		return $data;
	}

	public function listec($array=[])
	{
		$data = $this->select($array);
		return $data;
	}

	public function ajouter ($array=[])
	{

		$this->insert($array);
		$this->notify();
	}

	public function modifier ($array=[],$id)
	{

		$this->update($array,$id);
	}

	public function supprimer($id)
	{
		$array['id'] = $id;
		$this->delete($array);
	}

}