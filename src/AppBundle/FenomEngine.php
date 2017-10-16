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
        $mainTpl =  "D:\\OS\\OSPanel\\domains\\localhost\\symfony_local\\templates";
        $tmpTpl = "D:\\OS\\OSPanel\\domains\\localhost\\symfony_local\\tmp";
        //$mainTpl = "../../templates";
        //$mainTpl = $this->getParameter('kernel.project_dir');
       
        //print realpath($mainTpl); die();
        
        $fenom = Fenom\Extra::factory($mainTpl, $tmpTpl);
        $fenom->fetch($name, $parameters);
        return $fenom->display($name, $parameters);
    }
    
    public function exists($name){
        
    }

    public function supports($name){
        
    }
    
}
