<?php
namespace app\views;

class  template2  extends decoratorTemplate{

  protected $vue = "templates/default2";


  public function __construct($view,$array=[],$other=[])
   {
    $this->view = $view;
		$this->array = $array;
		$this->other = $other;
  }


    
  public function getView()
  {
        ob_start();
        $content  = $this->view->getView();      
        require 'app/views/'.$this->vue.'.php';
        return  ob_get_clean();

  }



  
}
