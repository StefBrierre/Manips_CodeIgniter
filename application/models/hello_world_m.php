<?php

class hello_world_m extends CI_Model{
    
    public function getData(){
        return array ("to" => "Bianca", 
            "from" => "Haddock");
}
}