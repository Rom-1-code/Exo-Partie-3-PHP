<?php
class personnage{
    //propriété :
    private $_speudo;
    private $_vie;

    //méthode :
    public function __construct(){
        $this->_vie = 100;
        echo "Romain a ".$this->_vie." PV";
        }
    }
?>