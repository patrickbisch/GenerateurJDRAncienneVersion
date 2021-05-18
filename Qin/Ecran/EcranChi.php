<?php

class EcranChi
{
    function Afficher($Perso)
    {
        $Def = array("Chi", "Résistence", "Defense passive");
        for($x = 0;$x < count($Def);$x++)
        {
            echo "<label class='LblChi" . $x . "'>";
            echo $Def[$x];
            echo "</label>";

            echo "<label class='ZCChi" . $x . "'>";
            echo $x;
            echo "</label>";
        }
    }
}