<?php

class EcranPerso
{
    function Afficher($Perso, $Action = "VISU", $Joueurs = "")
    {
        $Def =array('Nom', 'Joueur', 'Classe', 'Age', 'Avantage', 'Desavantage');
        for($x = 0;$x < count($Def);$x++)
        {
            echo "<label class='Lbl" . $Def[$x] . "' for='" . $Def[$x] . "'>";
            echo $Perso->Label[$x] . " : </label>";
        }
        if($Perso->id_personnage == 0)
        {
            $Action = "CREAT";
        }
        else
        {
            if($Action == "CREAT")
            {
                $Action = "MODIF";
            }
        }
        if($Action == "VISU")
        {
            for($x = 0;$x < count($Def);$x++)
            {
                echo "<input class='Sai" . $Def[$x] . "' id='" . $Def[$x] . "'";
                echo " value='" . $Perso->Donnee[$x] . "'";
                echo " type='text' disabled>";
            }
            return(1);
        }

        echo "<input class='Sai" . $Def[0] . "' id='" . $Def[0] . "'";
        echo " value='" . $Perso->Donnee[0] . "' type='text' required>";

        echo "<input class='Sai" . $Def[2] . "' id='" . $Def[2] . "'";
        echo " value='" . $Perso->Donnee[2] . "' type='text' required>";

        echo "<input class='Sai" . $Def[3] . "' id='" . $Def[3] . "'";
        echo " value='" . $Perso->Donnee[3] . "'";
        echo " type='number' min='12' max='120' required>";

        if($Action != "CREAT")
        {
            echo "<input class='Sai" . $Def[1] . "' id='" . $Def[1] . "'";
            echo " value='" . $Perso->Donnee[1] . "' type='text' disabled>";

            echo "<input class='Sai" . $Def[4] . "' id='" . $Def[4] . "'";
            echo " value='" . $Perso->Donnee[4] . "' type='text' disabled>";

            echo "<input class='Sai" . $Def[5] . "' id='" . $Def[5] . "'";
            echo " value='" . $Perso->Donnee[5] . "' type='text' disabled>";
            return(1);
        }

        echo "<select id='" .$Def[1] . "' name='" . $Def[1] . "'";
        echo " class='Sel" . $Def[1] . "'>";
        echo "<option value='0'></option>";
        echo "<option value='1'>PNJ</option>";
        for($y = 0; $y < count($Joueurs); $y++)
        {
            echo "<option value='" . $Joueurs[$y]->id_joueur ."'>";
            echo $Joueurs[$y]->prenom . " " . $Joueurs[$y]->nom;
            echo "</option>";
        }
        echo "</select>";

        $Trv = $Perso->Avantage;
        for($x = 4;$x < 6;$x++)
        {
            echo "<select id='" .$Def[$x] . "' name='" . $Def[$x] . "'";
            echo " class='Sel" . $Def[$x] . "'>";
            echo "<option value='0'>Aucun</option>";
            for($y = 0; $y < count($Trv); $y++)
            {
                echo "<option value='" . $Trv[$y]->id_message ."'>";
                echo $Trv[$y]->texte . "</option>";
            }
            echo "</select>";
            $Trv = $Perso->Desavantage;
        }
        return(1);
    }
}

