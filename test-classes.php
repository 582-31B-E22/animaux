<?php
include('Animal.cls.php');
include('Chat.cls.php');
include('Chien.cls.php');
include('Aigle.cls.php');
include('Baleine.cls.php');

// Test de la classe Animal
// Créer des instances d'animaux
$milou = new Chien(6, 3, "Milou", "Berger belge");
echo $milou;
// Lire le poids (à travers l'accesseur)
echo "Le poids de Milou : ".$milou->getPoids();
echo '<hr>';
// Changer le poids (directement : erreur)
//$milou->poids = 12;
// Changer le poids (à travers son mutateur)
$milou->setPoids(-25);
echo "Le nouveau poids de Milou : ".$milou->getPoids();
echo '<hr>';
// Créer un deuxième animal
$mobyDick = new Baleine(15, 1500, "Je suis une baleine célèbre");
// Afficher le poids
echo "Poids de Moby : {$mobyDick->getPoids()}";
echo '<hr>';
echo "Nombre d'animaux créés : ".Animal::getNombre();
echo '<hr>';

// Tests avec la classe Chats

$garfield = new Chat(4, 12, 'Je suis Garfield');
$garfield->emettreSon();
echo '<hr>';
echo "Je pèse {$garfield->getPoids()}";
echo '<hr>';
echo "Nombre d'animaux : ".Animal::getNombre();
echo '<hr>';
echo "Nombre de chats : ".Chat::getNombre();
echo '<hr>';
$milou->emettreSon(); 

// Créer des animaux aléatoirement
function creerAnimal($choix) {
    switch($choix) {
        case 1: 
            return new Aigle(2, 1, "Un aigle", 1.2);
            break;
        case 2: 
            return new Baleine(10, 1500, "Baleine bleue");
            break;
        case 3: 
            return new Chat();
            break;
        case 4:
            return new Chien(5, 4);
            break;
    }
}
$animaux = [];
for ($i=0; $i < 10; $i++) { 
    $animaux[] = creerAnimal(random_int(1, 4));
}

// Exemple de polymorphisme
foreach ($animaux as $animal) {
    echo "<hr>";
    echo $animal;
    // Chaque objet utilise sa forme spécifique de la méthode emmetreSon()
    $animal->emettreSon();
}