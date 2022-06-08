<?php
class Aigle extends Animal 
{
    private $longueurAiles;

    // Propriété statique (nombre de baleine "construits")
    private static $nombre = 0;

    function __construct($age=0, $poids=0, $description="", $longueurAiles=0)
    {
        parent::__construct($age, $poids, $description);
        $this->longueurAiles = $longueurAiles;
        // Incrémenter le nombre de chats en existence
        self::$nombre++;
    }    

    public static function getNombre() {
        return self::$nombre;
    }

    public function seDeplacer($vitesse) {
        echo "Je vole";
    }

    public function emettreSon() {
        echo "Je glatît...";
    }
}
