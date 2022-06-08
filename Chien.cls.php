<?php
class Chien extends Animal 
{
    // Propriétés d'instance additionnelles
    private $race;

    // Propriété statique (nombre de chats "construits")
    private static $nombre = 0;

    function __construct($age=0, $poids=0, $description="", $race="Poodle")
    {
        // Appeler le constructeur parent !!!
        parent::__construct($age, $poids, $description);
        $this->race = $race;
        $this->poids = 2*$poids;
        // echo "<br>Poids devrait être inaccessible ici : {$this->poids}";
        // echo "<br>Poids avec getPoids : {$this->getPoids()}";

        // Incrémenter le nombre de chats en existence
        self::$nombre++;
    }    

    public static function getNombre() {
        return self::$nombre;
    }

    public function seDeplacer($vitesse) {
        echo "Je me déplace à quatre pattes";
    }

    public function emettreSon() {
        echo "Je jappe...";
    }

    public function __toString() {
        return parent::__toString()."({$this->race})<br>";
    }
}
