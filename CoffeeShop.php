<?php
namespace App;
class CoffeeShop
{ 
   protected $producs = []; 
   public function addProducts($producs=[]) 
   {
        $this->products=$producs;
    }

    public function getProducts()
    { 
        return $this->producs;
    }

    public function removeProducts($id)
    { 
        //Eliminamos products
    }


   



    


}