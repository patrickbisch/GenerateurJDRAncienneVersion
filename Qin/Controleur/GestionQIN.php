<?php

if(isset($_POST['PERSONNAGE']))
{
    $ch  = "../Qin/Ecran/CreationQIN.php";
    $ch .= "?PERSONNAGE=" . $_POST['PERSONNAGE'];
    header("Location:$ch");
}
