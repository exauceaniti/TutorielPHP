<?php


while (true) {
    $debut = (int)readline('Heur de l\'ouverture: ');
    $fin = (int)readline('Heur de fermeture: ');
    if ($debut >= $fin) {
        echo "le chrono ne peux pas etre afficher car l\'heur de l\'ouverture est superieur a l\'heur de fermeture";
    } else {
        $creneaux = [$debut, $fin];
        $action = readline('Voulez vous enregistrer un creneau (o/n): ');
        if ($action = 'n') {
            break;
        }
    }
}
echo " Le magasin est ouvert de: ";
foreach ($creneaux as $creneau) {
    echo "{$creneau[0]}h a {$creneau[1]}h";
}


$heur = (int)readline('A quelle heur voulez vous visiter le magasin: ');
$creneauTrouver = false;

foreach ($creneaux as $creneau) {
    if ($heur >= $creneaux[0] && $heur <= $creneaux[1]) {
        $creneauTrouver = true;
        break;
    }
}
if ($creneauTrouver) {
    echo "Bien veue le magasin sera ouvert ";
} else {
    echo "Desoler le magasin sera fermer";
}
