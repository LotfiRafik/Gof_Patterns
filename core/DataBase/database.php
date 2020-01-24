<?php

namespace core\DataBase;

use pdo;

class dataBase {

  	private $db_name = "rh";
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $pdo;
    private static $databaseInstance;

    private function __construct()
    {
        
        $this->pdo=new PDO('mysql:dbname='.$this->db_name.';localhost='.$this->db_host.'',''.$this->db_user.'',''.$this->db_pass.'');
    	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if(is_null(self::$databaseInstance))
        {
            self::$databaseInstance = new dataBase();
        }
        return self::$databaseInstance;
    }

    public function query($statement)
    {
     $query= $this->pdo->query($statement);
     $result=$query->fetchAll(PDO::FETCH_OBJ);
     if(!empty($result))
     {
        return $result;
     }
     return false;
    }

    public function prepare($statement,$argument)
    {
    	$query=$this->pdo->prepare($statement);
    	$query->execute($argument);
        if(strpos($statement,'UPDATE')!==0   AND strpos ($statement,'INSERT')!==0 AND strpos($statement,'DELETE')!==0)
        {
            $result=$query->fetchAll(PDO::FETCH_OBJ);
             if(!empty($result))
             {
                return $result;
             }
             return false;
        }
    }


	}
