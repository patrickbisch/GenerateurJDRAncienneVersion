<?php
/*
echo "POST : <br>";
var_dump($_POST);
echo "<br>";
echo "GET : <br>";
var_dump($_GET);
echo "<br>";
*/
    require_once '../../Code/Config.php';
    require_once '../../Code/Autoloader.php';
    Autoloader::register();

    session_start();
    if(!isset($_SESSION['CAMPAGNE']))
    {
        header("Location:../Index.php?ERROR=3");
    }
    if(!isset($_GET['PERSONNAGE']))
    {
        header("Location:../Index.php?ERROR=3");
    }

    $Campagne = $_SESSION['CAMPAGNE'];
    $Joueur = $_SESSION['JOUEUR'];
    $Perso = new Personnage();
    $Perso->Charger($_GET['PERSONNAGE']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>QIN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleQIN.css">
</head>

<body>
<fieldset>
    <?php
        echo "<legend>MODIFICATION/CREATION : " . $_GET['PERSONNAGE'] . "</legend>";
    ?>
    <section>
        <form action="" method="post" id="GestionQIN">
            <h2>Liste des actions</h2>
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
    </section>
</fieldset>
    <?php
        echo "<div class='Cadre Titre'>";
        if($_GET['PERSONNAGE'] == 0)
        {
            $msg = MessageQIN::Fiche(3);
            echo $msg->texte;
        }
        else
        {
            $msg = MessageQIN::Fiche(4);
            echo $msg->texte;
        }
        echo "</div>";
    ?>
    
    <div class='Ligne Perso'>
        <div class='Cadre Perso2x3'>
            <?php
                require_once 'EcranPerso.php';
                $tmp = new EcranPerso();
                $tmp->Afficher($Perso, "CREAT", $Joueur);
            ?>
        </div>

        <div class='Cadre Trait TB'>
            <?php
                require_once 'EcranTrait.php';
                $trt = new EcranTrait();
                $trt->Afficher($Perso, "INFO");
            ?>
        </div>

        <div class='Cadre ChiB'>
            <?php
                require_once 'EcranChi.php';
                $chi = new EcranChi();
                $chi->Afficher($Perso);
            ?>
        </div>
    </div>

    <div class='Ligne Perso'>
        <div class='Cadre Perso1x6'>
            <?php
                $tmp->Afficher($Perso,"VISU", $Joueur);
            ?>
        </div>

        <div class='Cadre Trait TC'>
            <?php
                $trt->Afficher($Perso, "VISU");
            ?>
        </div>

        <div class='Cadre ChiC'>
            <?php
                $chi->Afficher($Perso);
            ?>
        </div>
    </div>

    <div class='Ligne Perso'>
        <div class='Cadre Perso3x2'>
            <?php
                $tmp->Afficher($Perso,"MODIF", $Joueur);
            ?>
        </div>
        <div class='Cadre Trait TA'>
            <?php
                $trt->Afficher($Perso, "INFO");
            ?>
        </div>
        <div class='Cadre ChiA'>
            <?php
                $chi->Afficher($Perso);
            ?>
        </div>
    </div>

    <div class='Cadre Etat'>Test
        <label class="EtatErreur">ERREUR</label>
        <label class="EtatCampagne">
        <?php
            $msg = MessageQIN::Fiche(2);
            echo sprintf($msg->texte, $Campagne->campagne);
        ?>
        </label>
    </div>

    <script type="text/javascript">
        document.getElementById("PERSONNAGE").addEventListener("change", function(e)
        {
            document.getElementById("GestionQIN").submit();
        });
    </script>
</body>
</html>