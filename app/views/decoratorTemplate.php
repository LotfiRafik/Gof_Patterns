<?php
namespace app\views;

abstract class decoratorTemplate extends View {
    protected $view ; //Composant
    protected $vue;
    protected $array;
    protected $other;

    public function getView()
    {
          ob_start();
          $content  = $this->view->getView();
          require 'app/views/'.$this->vue.'.php';
          $content = ob_get_clean();
          return $content;
    }  
}
