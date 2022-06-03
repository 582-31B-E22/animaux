<?php
class Chien extends Animal 
{
    // Propriétés d'instance additionnelles
    private $race;

    // Propriété statique (nombre de chats "construits")
    private static $nombre = 0;

    function __construct($age=0, $poids=0, $description="", $race="Poodle")
    {
        parent::__construct($age, $poids, $description);
        $this->race = $race;

        // Incrémenter le nombre de chats en existence
        self::$nombre++;
    }    

    public static function getNombre() {
        return self::$nombre;
    }

    public function seDeplacer() {
        echo "Je me déplace à quatre pattes";
    }

    public function emettreSon() {
        echo "Je jappe...";
    }
}
