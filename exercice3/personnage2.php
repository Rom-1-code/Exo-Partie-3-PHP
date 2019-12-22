<?php
class personnage{
    //propriété :
    private $_speudo;
    private $_vie;

    //méthode :
    public function __construct($newpseudo,$newvie){
        $this->_speudo=$newpseudo;
        $this->_vie = $newvie;
        echo "Romain a ".$this->_vie." PV";
        }
    }
?>