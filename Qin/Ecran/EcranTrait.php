<?php

class EcranTrait
{
    function Afficher($Perso, $Action = "VISU")
    {
        $Pos = array('A1', 'A3', 'B2', 'C1', 'C3');
        $Max = 5;
        if($Action == "MODIF")
        {
            $Max = 6;
        }
        for($x = 0;$x < count($Pos);$x++)
        {
            if($Action == "INFO")
            {
                echo "<div class='Trait" . $Pos[$x] . "'>";
                echo $Perso->Trait[$x];
                echo "</div>";
            }
            else
            {
                echo "<div class='Trait" . $Pos[$x] . "'>";
                echo $Perso->Label[6 + $x];
                echo "<br>";
                if($Action == "VISU")
                {
                    echo "<input class='LblTrait' disabled";
                    echo  " value='" . $Perso->Trait[$x] . "'></input>";
                }
                else
                {
                    echo "<select id='Trait" . $Pos[$x] . "' name='" . $Pos[$x] . "'";
                    echo " class='SelTrait'>";
                    for($y = $Perso->Trait[$x]; $y <= $Max; $y++)
                    {
                        echo "<option value='" . $y ."'>";
                        echo $y . "</option>";
                    }
                    echo "</select>";
                }
                echo "</div>";
            }
        }
        if($Action == "CREAT")
        {
            echo "<div class='TraitB1'>Création<br>";
            echo "<label class='TraitExp' id='TraitExp'>";
            echo  "5 / 14";
            echo "</label>";
            echo "</div>";
        }
    }
}