<?php
class Personnage{
    //propriété :
    private $_id;
    private $_personnage;
    private $_PDO;

    //méthode :
    public function __construct($newid,$newperso){
        $this->_id=$newid;
        $this->_personnage=$newperso;
        
    }
    public function instanciePDO($P1){ 
        
        $BddPhpexo = new PDO('mysql:host=localhost; dbname=php exo; charset=utf8', 'root', '');
        $this->_PDO=$BddPhpexo;
        $requete = $BddPhpexo->query("SELECT * from personnage where id = id"); 
        
        while($resultat = $requete->fetch())
        {
            echo  $resultat['id'];
            echo  $resultat['personnage'];

        }
    }
}
?>

