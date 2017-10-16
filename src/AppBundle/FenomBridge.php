<?php

namespace AppBundle;

use Fenom;
use Fenom\Extra;

class FenomBridge
{
    
    /**
     * FenomBridge::render()
     * 
     * @param mixed $tpl
     * @param mixed $options
     * @return void
     */
    function render($tpl,$options){
        
        $fenom = Fenom\Extra::factory($tpl,$tpl,$options);
        
        return $fenom;
    }
    
}
