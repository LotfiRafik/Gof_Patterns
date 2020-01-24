<?php

namespace core\model;
use core\DataBase\database;

abstract class table implements \core\Model\subject
{
    protected $observer = null;
    protected $table = "";
    protected $db = null;

    public function __construct()
    {
        $this->db = dataBase::getInstance();
    }

    // Observer Pattern
    public function notify()
    {
        $this->observer->update();
    }
    public function attach($obs)
    {
        $this->observer = $obs;
    }
    public function detach()
    {
        $this->observer = null;
    }
    //-----------------------------//

	public function insert($array=[])
  	{

        $sql_parts=[];
        $arguments=[];
        $inteog=[];
        $i = 0;
        foreach($array as $k=>$v)
        {
        	$sql_parts[$i]=$k;
        	$arguments[$i]=$v;
        	$inteog[$i]='?';
            $i++;
        }

        $a = implode(",",$sql_parts);
        $b = implode(",",$inteog);

        $statement = 'INSERT INTO '.$this->table. '('.$a.') VALUES ('.$b.')';
        $this->db->prepare($statement,$arguments);
    }
    public function select($array=[])
    {
        //('SELECT * from user WHERE username=:username and password=:password',$array);
        $sql_parts=[];
        $arguments=[];
        $i = 0;
        foreach($array as $k=>$v)
        {
            $sql_parts[$i]= $k.'=?';
            $arguments[$i]=$v;
            $i++;
        }
        $a = implode(" and ",$sql_parts);
        $statement = 'SELECT * from '.$this->table.' WHERE ' .$a;
        return ($this->db->prepare($statement,$arguments));
    }
    public function update($array=[],$id)
    {

        $sql_parts=[];
        $arguments=[];
        $i = 0;
        foreach($array as $k=>$v)
        {
            $sql_parts[$i]= $k.'=?';
            $arguments[$i]=$v;
            $i++;
        }
        $arguments[$i]=$id;
        $a = implode(",",$sql_parts);
        $statement = 'UPDATE '.$this->table.' SET ' .$a. ' WHERE id=?';
        $this->db->prepare($statement,$arguments);
        }

    public function delete($array=[])
    {
        //('DELETE * from user WHERE username=:username and password=:password',$array);
        $sql_parts=[];
        $arguments=[];
        $i = 0;
        foreach($array as $k=>$v)
        {
            $sql_parts[$i]= $k.'=?';
            $arguments[$i]=$v;
            $i++;
        }
        $a = implode(" and ",$sql_parts);
        $statement = 'DELETE from '.$this->table.' WHERE ' .$a;
        $this->db->prepare($statement,$arguments);
    }


    public function exist($id)
	{
		if(isset($id))
		{
			$id = intval($id);
			if(0 < $id)
			$statement = 'SELECT id from ' .$this->table. '  WHERE id=?';
			$arguments[0] = $id;
			if($this->db->prepare($statement,$arguments))
			{
				return true;
			}
		}
		header('location:?p=error');
	}


}
