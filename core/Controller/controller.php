<?php
namespace core\Controller;
use app\model\Parametres;
use app\views\View;
use app\views\template1;
use app\views\template2;

class  Controller implements \core\Controller\observer{

  //Observer Pattern
   public function update(){

   }
  //--------------------------//


  public function render($vue,$array=[],$other=[])
  {
    $parametres = new Parametres ;
    $param = $parametres->liste();
    // Patron decorator
    $view = new View($vue,$array,$other);
    $template1 = new template1($view,$param);
    $template2 = new template2($template1);
    echo $template1->getView();
  }


  public function hashPassword($pass)
  {
	return sha1($pass);
  }

  public  function htmlspecialchars()
  {
	foreach ($_POST as $key => $value)
	{
		$_POST[$key] = htmlspecialchars($_POST[$key]);
	}	
  }
  
}
