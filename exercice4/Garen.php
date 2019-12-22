<?php
class Garen{
    //propriété :
    private $_attack;
    private $_defence;

    //méthode :
    public function __construct($newattack,$newvdefence){
        $this->_attack = $newattack;
        $this->_defence = $newvdefence;
    }

    public function _attack($jinx){
       
        $jinxdef= $jinx->_getdefence();
        $ResutAttack=$jinxdef-$this->_attack;
        
        $jinx->_modifdef($ResutAttack);
        echo "<p>Jinx attaque Garen ! </p>";
        
    }

    public function _getdefence(){
        return $this->_defence;
    }

    public function _modifdef($ResutAttack){
        $this->_defence=$ResutAttack;
        echo " La defence de Garen tombe a   ".$this->_defence; 
    }

}
?>