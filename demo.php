<?php

function repondre_oui_nom($phrase)
{
    while (true) {
        $reponse = readline($phrase . " o(oui) ou n(nom) ");
        if ($reponse === 'o') {
            return true;
        } else if ($reponse === 'n') {
            return false;
        } else {
            echo "Reponse Invalide. Veillez repondre par o(oui) ou n(non). \n";
        }
    }
}

function demander_un_creneau($phrase = "veillez entrer un creneau")
{
    echo $phrase . "\n";
    while (true) {
        $debut = (int)readline('Entrer une heur de debut : ');
        if ($debut >= 0 || $debut <= 23) {
            break;
        }
    }
    while (true) {
        $fin = (int)readline("Entrer l\'heur de fermeture : ");
        if ($fin >= 0 && $fin <= 23 && $fin > $debut) {
            break;
        }
    }
    return [$debut, $fin];
}

function demander_un_creneaux($mot = "Entrer un crenneaux")
{
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux[] = demander_un_creneau();
        $continuer = repondre_oui_nom("Voulez vous continuer ?");
    }
    return $creneaux;
}
