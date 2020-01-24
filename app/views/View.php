<?php
namespace app\views;
class  View {

    private $vue;
    private $array;
    private $other;

    public function __construct($vue,$array,$other)
	{
        $this->vue = $vue;
		$this->array = $array;
		$this->other = $other;
	}

    public function getView()
    {
        ob_start();
        require 'app/views/'.$this->vue.'.php';
        return  ob_get_clean();
    }

  
}
