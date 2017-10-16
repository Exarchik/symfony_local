<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Templating\EngineInterface;
use Fenom;
use Fenom\Extra;
use AppBundle\AppBundle;

class FenomEngine implements EngineInterface
{
    
    /**
     * FenomEngine::render()
     * 
     * @param mixed $name
     * @param mixed $parameters
     * @return void
     */
    public function render($name, array $parameters = array())
    {
        //$kernel = new AppKernel(); 
        //print_r([MAIN_DIR,MAIN_TEMPLATES,MAIN_TMP]);
        //print realpath($mainTpl); die();
        
        $fenom = Fenom\Extra::factory(MAIN_TEMPLATES, MAIN_TMP);
        
        #$callback = [];
        #$data = $fenom->pipe($name, $callback, $parameters);
        #print $fenom->getTemplate($name);
        $fenom->fetch($name, $parameters);
        return $fenom->display($name, $parameters);
    }
    
    public function exists($name){
        
    }

    public function supports($name){
        
    }
    
}
