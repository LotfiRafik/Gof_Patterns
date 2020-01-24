<?php
namespace app\views;

class template1  extends decoratorTemplate{

  protected $vue = "templates/default";

    
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
