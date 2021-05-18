<?php

session_start();
if(isset($_POST['JDR'])){
    switch($_POST['JDR'])
    {
        case "JOUEUR":
            $_SESSION['ACTION'] = "JOUEUR";
            header("Location:Gestion/index.php?JOUEUR");
            break;
        case "CAMPAGNE CRUD":
            $_SESSION['VISUALISATION'] = "OUI";
            $_SESSION['MODIFICATION'] = "OUI";
            $_SESSION['SUPPRESSION'] = "OUI";
            $_SESSION['CREATION'] = "OUI";
            $_SESSION['ACTION'] = "CAMPAGNE";
            header("Location:Gestion/index.php?CAMPAGNE");
            break;
        case "CAMPAGNE CRU":
            $_SESSION['VISUALISATION'] = "OUI";
            $_SESSION['MODIFICATION'] = "OUI";
            $_SESSION['SUPPRESSION'] = "NON";
            $_SESSION['CREATION'] = "OUI";
            $_SESSION['ACTION'] = "CAMPAGNE";
            header("Location:Gestion/index.php?CAMPAGNE");
            break;
        case "CAMPAGNE RU":
            $_SESSION['VISUALISATION'] = "OUI";
            $_SESSION['MODIFICATION'] = "OUI";
            $_SESSION['SUPPRESSION'] = "NON";
            $_SESSION['CREATION'] = "NON";
            $_SESSION['ACTION'] = "CAMPAGNE";
            header("Location:Gestion/index.php?CAMPAGNE");
            break;
        case "CAMPAGNE R":
            $_SESSION['VISUALISATION'] = "OUI";
            $_SESSION['MODIFICATION'] = "NON";
            $_SESSION['SUPPRESSION'] = "NON";
            $_SESSION['CREATION'] = "NON";
            $_SESSION['ACTION'] = "CAMPAGNE";
            header("Location:Gestion/index.php?CAMPAGNE");
            break;
        default:
            $Campagne = CampagneJDR::Fiche((int)1);
            $jdr = TypeJDR::Fiche((int)$Campagne->id_jdr);
            if($jdr->reference != "")
            {
                $_SESSION['CAMPAGNE'] = $Campagne;
                $_SESSION['JOUEUR'] = JoueurJDR::RecupererListeJoueur($Campagne->id_campagne);
                $param = $jdr->reference . "/index.php";
                header("Location:$param");
            }
            else
            {
                header("Location:index.php?ERROR=2");
            }
            break;
    }
}