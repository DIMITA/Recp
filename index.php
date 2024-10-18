<?php

function triPersonnalise($tableau) {
    for ($i = 0; $i < count($tableau) - 1; $i++) {
        for ($j = 0; $j < count($tableau) - $i - 1; $j++) {
            if ($tableau[$j] > $tableau[$j + 1]) {
                $temp = $tableau[$j];
                $tableau[$j] = $tableau[$j + 1];
                $tableau[$j + 1] = $temp;
            }
        }
    }
    return $tableau;
}

function genererMotDePasse($longueur = 12) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $motDePasse = '';
    $taille = strlen($caracteres);
    for ($i = 0; $i < $longueur; $i++) {
        $motDePasse .= $caracteres[rand(0, $taille - 1)];
    }
    // Vérifier si le mot de passe contient au moins une majuscule, une minuscule, un chiffre et un caractère spécial
    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse) || !preg_match('/[0-9]/', $motDePasse) || !preg_match('/[!@#$%^&*()]/', $motDePasse)) {
        // Récursion pour générer un nouveau mot de passe qui répond aux critères
        return genererMotDePasse($longueur);
    }
    return $motDePasse;
}

function inverserPhrase($phrase) {
    $mots = explode(" ", $phrase);
    return implode(" ", array_reverse($mots));
}

function compterVoyelles($chaine) {
    preg_match_all('/[aeiouAEIOU]/', $chaine, $matches);
    return count($matches[0]);
}

function romainEnEntier($romain) {
    $valeurs = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    $total = 0;
    $precedent = 0;
    for ($i = strlen($romain) - 1; $i >= 0; $i--) {
        $actuel = $valeurs[$romain[$i]];
        if ($actuel < $precedent) {
            $total -= $actuel;
        } else {
            $total += $actuel;
        }
        $precedent = $actuel;
    }
    return $total;
}

// Exemple d'utilisation
$monTableau = [5, 2, 9, 1, 5, 6];
$tableauTrie = triPersonnalise($monTableau);

$motDePasse = genererMotDePasse(16);

$inverserPhrase = inverserPhrase('Il est quand même plus simple');

$chiffreRomain = romainEnEntier('MLIX');

$compte = compterVoyelles('Je te fais confiance');

print($motDePasse);
echo PHP_EOL;
print($chiffreRomain);
echo PHP_EOL;
print($inverserPhrase);
echo PHP_EOL;
print($compte);
echo PHP_EOL;

// Afficher le résultat
print_r($tableauTrie);
