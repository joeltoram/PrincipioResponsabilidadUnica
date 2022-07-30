<?php

namespace App;

class JsonMenuOutput implements MenuOutput 
{
    
    public function Output($products)
    { 
      return  $menu = json_decode($Products)


    }

 }