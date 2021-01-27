<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
echo "<div>" . rand(0, 50) . "</div> <br>";


/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
echo "<div>" . rand(50, getrandmax()) . "</div> <br>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 50, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$rand = rand(0, 100);
if($rand <= 50) {
    echo "Vous avez gagné <br>";
}
else {
    echo "Vous avez perdu <br>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.

function random($min, $max) {
    $rand = rand($min, $max);
    if($rand >= ($max - 100)) {
        return random($min, $max);
    }
    else {
        return $rand;
    }
}
