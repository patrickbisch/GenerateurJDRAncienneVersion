<?php

require_once '../../smarty/libs/Autoloader.php';
Smarty_Autoloader::register();

require_once '../Code/Config.php';
require_once '../Code/Autoloader.php';
Autoloader::register();

$smarty = new Smarty;
$smarty->assign("TitreWindows", MessageJDR::Texte(3));

/*==== GESTION POUR LES INFO-BULLES ====*/
$LstTitre = array(
    "VisuCampagne" => MessageJDR::Texte(10),
    "InfoJDR" => MessageJDR::Texte(11),
    "InfoEmail" => MessageJDR::Texte(12),
    "VisuJoueur" => MessageJDR::Texte(13),
    "ListeCampagne" => MessageJDR::Texte(14),
    "ListeJoueur" => MessageJDR::Texte(15),
    "CreerCampagne" => MessageJDR::Texte(16),
    "AjoutJoueur" => MessageJDR::Texte(17)
);
$smarty->assign("InfoBulle", $LstTitre);


/*==== GESTION POUR LES CAMPAGNES ====*/
$LstCampagne = CampagneJDR::ListeCampagne();
$smarty->assign("ListeCampagne", $LstCampagne);
$LstTitre = array(
    "LstCampagneNom" => MessageJDR::Texte(8),
    "LstCampagneJDR" => MessageJDR::Texte(9),
    "LstCampagneMaitre" => MessageJDR::Texte(5),
    "LstCampagneJoueur" => MessageJDR::Texte(18),
);
$smarty->assign("ListeCampagneTitre", $LstTitre);

/*==== GESTION POUR LES JOUEURS ====*/
$LstJoueur = JoueurJDR::ListeJoueur();
$smarty->assign("ListeJoueur", $LstJoueur);
$LstTitre = array(
    "LstJoueurNom" => MessageJDR::Texte(4),
    "LstJoueurEmailErr" => MessageJDR::Texte(7),
    "LstJoueurMaitre" => MessageJDR::Texte(5),
    "LstJoueurTable" => MessageJDR::Texte(6));
$smarty->assign("ListeJoueurTitre", $LstTitre);

/*==== GESTION POUR LES TABLES ====*/
$LstTable = TableJDR::ListeTable();
$smarty->assign("ListeTable", $LstTable);

/*==== GESTION POUR LES TYPES JDR ====*/
$LstTable = TypeJDR::Liste("type");
$smarty->assign("ListeJDR", $LstTable);
