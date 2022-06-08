<?php
class Baleine extends Animal 
{
    // Propriété statique (nombre de baleine "construits")
    private static $nombre = 0;

    function __construct($age=0, $poids=0, $description="")
    {
        parent::__construct($age, $poids, $description);

        // Incrémenter le nombre de chats en existence
        self::$nombre++;
    }    

    public static function getNombre() {
        return self::$nombre;
    }

    public function seDeplacer($vitesse) {
        echo "Je nage";
    }

    public function emettreSon() {
        echo "Je chante...";
    }
}
