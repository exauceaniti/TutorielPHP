<?php

function bonjour($nom = null)
{
    if ($nom === null) {
        return "Bonjour \n";
    } else {
        return "Bonjour" . " " . $nom . "! \n";
    }
}
$salutation = bonjour('Exau');
echo $salutation;
