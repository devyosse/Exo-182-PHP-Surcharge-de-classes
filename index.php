<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";
// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Hocine");

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("Phoenix");

$princesse = new Princesse();
$princesse->setNom('Peach');
echo $princesse->getNom();
echo "<p>". $princesse->x . "</p>";
echo "<p>" . $princesse->y . "</p>";

$sorcier = new Sorcier();
$sorcier->setNom('Fireball');
echo $sorcier->getNom();
echo "<p>". $sorcier->x . "</p>";
echo "<p>" . $sorcier->y . "</p>";


