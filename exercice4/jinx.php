<?php
class jinx{
    //propriété :
    private $_attack;
    private $_defence;

    //méthode :
    public function __construct($newattack,$newvdefence){
        $this->_attack = $newattack;
        $this->_defence = $newvdefence;
    }

    public function _attack($Garen){
        
        $Garendef= $Garen->_getdefence();
        $ResutAttack=$Garendef-$this->_attack;
        
        $Garen->_modifdef($ResutAttack);
        
    }

    public function _getdefence(){
        return $this->_defence;
        
            
    }

    public function _modifdef($ResutAttack){
        $this->_defence=$ResutAttack;
        echo "<p>Garen attaque Jinx ! </p>";
        echo " La defence de Jinx tombe a ".$this->_defence; 
    }
    
}
?>