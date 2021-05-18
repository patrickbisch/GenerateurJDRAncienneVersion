<?php
	require_once 'Code/Config.php';
	require_once 'Code/Autoloader.php';
	Autoloader::register();
	require_once 'Controleur/Gestion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>JDR</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ecran/StyleJDR.css">
</head>

<body>
	<?php 
		$Campagne = CampagneJDR::Liste();
	?>      

    <fieldset>
        <legend>JEUX DE ROLE</legend>
        <section>
			<form action="" method="post" id="formJDR">
                <h2>Action possibles</h2>
                <select name="JDR" id="JDR">
                    <option value="" selected>-- Choisir une action --</option>
                    <option value="CAMPAGNE CRUD">Gestion des Campagnes (CRUD)</option>
                    <option value="CAMPAGNE CRU">Gestion des Campagnes (CRU)</option>
                    <option value="CAMPAGNE RU">Gestion des Campagnes (RU)</option>
                    <option value="CAMPAGNE R">Gestion des Campagnes (R)</option>
                    <option value="JOUEUR">Gestion des Joueurs</option>
                    <option value="QIN">QIN</option>
                </select>
            </form>

            <script type="text/javascript">
				document.getElementById("JDR").addEventListener("change", function(e)
				{
					document.getElementById("formJDR").submit();
				});
            </script>
        </section>
    </fieldset>
</body>
</html>