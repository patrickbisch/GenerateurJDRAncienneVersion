<?php

session_start();
$Action = array("CREATION", "VISUALISATION", 
            "MODIFICATION", "SUPPRESSION");
for($x = 0; $x < count($Action);$x++)
{
    $smarty->assign($Action[$x], $_SESSION[$Action[$x]]);
}
if(isset($_GET['CREATION']))
{
    switch($_GET['CREATION'])
    {
        default:
            $smarty->display('Ecran/Template/CampagneCreat.tpl');
    }
}
else
{
    $Ecran = "";
    if(isset($_GET['VISUALISATION']))
    {
        $Ecran = $_GET['VISUALISATION'];
    }
    switch($Ecran)
    {
        case "JOUEUR":
            $smarty->assign("Titre", MessageJDR::Texte(1));
            $smarty->assign("ACTION", "JOUEUR");
            break;
        default:
            $smarty->assign("Titre", MessageJDR::Texte(2));
            $smarty->assign("ACTION", "CAMPAGNE");
    }
    $smarty->display('Ecran/Template/Accueil.tpl');
}
