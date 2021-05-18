<?php

    require_once '../Code/Config.php';
    require_once '../Code/Autoloader.php';
    Autoloader::register();

    session_start();
    if(!isset($_SESSION['CAMPAGNE']))
    {
        header("Location:../Index.php?ERROR=1");
    }

    $personnage = PersonnageQIN::Liste("nom");
    $Campagne = $_SESSION['CAMPAGNE'];
    require_once 'Controleur/GestionQIN.php';
    $msg = MessageQIN::Fiche(2);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>QIN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ecran/StyleQIN.css">
</head>

<body>
<fieldset>
    <?php
        echo "<legend>" . sprintf($msg->texte, $Campagne->campagne) . "</legend>";
    ?>
    <section>
        <form action="" method="post" id="GestionQIN">
            <h2>Liste des personnages</h2>
            <select name="PERSONNAGE" id="PERSONNAGE">
                <option value="" disabled selected>-- Choisir un personnage --</option>
                <option value="0">Creer un personnage</option>
                <?php
                foreach($personnage as $Ele)
                {
                    echo "<option value='$Ele->id_personnage'>$Ele->nom</option>";
                }
                ?>
            </select>
        </form>

        <script type="text/javascript">
            document.getElementById("PERSONNAGE").addEventListener("change", function(e)
            {
                document.getElementById("GestionQIN").submit();
            });
        </script>
    </section>
</fieldset>
</body>
</html>