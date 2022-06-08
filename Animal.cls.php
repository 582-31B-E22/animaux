<?php
abstract class Animal 
{
    // Propriétés (d'instances)
    private $age;
    private $poids;
    private $description;

    // Compter les (objets) animaux créés
    // Propriété "statique" (appartient à la classe, et NON pas aux instances)
    private static $nombre = 0;

    // Pour donner accès plus ouvert aux propriétés, on peut écrire 
    // des accesseurs ("getters") et des mutateurs ("setters")
    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        if(is_numeric($poids) && $poids > 0) {
            $this->poids = $poids;
        }
    }

    // Constructeur
    function __construct($age=0, $poids=0, $description="")
    {
        $this->age = $age;
        $this->setPoids($poids);
        $this->description = $description;

        // Incrémenter le nombre d'animaux créé
        self::$nombre++;
    }

    // Méthodes (statiques)
    public static function getNombre() {
        return self::$nombre;
    }

    // Méthode "magique"
    public function __toString() {
        return "<br>Je suis un Animal de type : ".get_class($this)."<br>";
    }

    // Méthodes (d'instances)
    protected abstract function seDeplacer($vitesse);
    protected abstract function emettreSon();
}