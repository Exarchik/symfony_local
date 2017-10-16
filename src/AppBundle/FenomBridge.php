<?php

namespace AppBundle;

use Fenom;
use Fenom\Extra;

class FenomBridge
{
     
    function render($tpl,$options){
        $fenom = Fenom\Extra::factory($tpl,$tpl,$options);
        
        
    }
    
}
