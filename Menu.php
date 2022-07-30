<?php

namespace App;

use JsonException;

class Menu
{
    
    public function view($products, MenuOutput $output)
    { 
                
        return $output->output($products);
       
        
    }
 }