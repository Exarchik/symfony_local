<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Templating\EngineInterface;
use Fenom;
use Fenom\Extra;

class FenomEngine implements EngineInterface
{
    
    /**
     * FenomEngine::render()
     * 
     * @param mixed $name
     * @param mixed $parameters
     * @return void
     */
    public function render($name, array $parameters = array()){
        
        $mainTpl =  "../../templates";
        
        $fenom = Fenom\Extra::factory($name, $mainTpl, $parameters);
        
        return $fenom;
    }
    
    public function exists($name){
        
    }

    public function supports($name){
        
    }
    
}
