<?php

namespace app\model;
use app\controller\Authcontroleur;


class Parametres extends \core\Model\table 
{
  protected $table = "parametres";
  private $nbImgAcc = 3;


  public function getNbImgAcc()
  {
    return $this->nbImgAcc;
  }
  
  public function __construct()
    {
      parent::__construct();

    }

  public function modifier()
  {

        $this->update();
  }

	public function liste()
	{
		return ($this->db->query('SELECT * FROM parametres'));
	}

  public function getimg()
  {
    return($this->db->query('SELECT imgacueille FROM parametres'));
  }


}
