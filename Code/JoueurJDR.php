<?php

class JoueurJDR extends OutilBD{
    protected static $_table = 'jdr_joueur';
    protected static $_cle = 'id_joueur';

    static function RecupererListeJoueur($id_table)
    {
        return Database::retournerEnregistrement("jdr_joueur, jdr_table",
    "jdr_table.id_campagne = $id_table AND jdr_table.id_joueur = jdr_joueur.id_joueur",
                                                "jdr_joueur.nom, jdr_joueur.prenom",
                                                "*", true, PDO::FETCH_OBJ);
    }
    static function ListeJoueur()
    {
        return Database::retournerEnregistrement(
                static::$_table, 
                "nom <> '' ", 
                "nom, prenom", 
                "id_joueur, nom, prenom, adresseEmailErreur"
                . "",
                true, PDO::FETCH_OBJ);
    }
    private static function ControlerPassword($Password)
    {
		if(strlen($Password) < 6)
        {
			return(-1);
		}
		$maj = false;
		$min = false;
		$num = false;
		$spe = false;

		$strToArray = str_split($Password);
		foreach($strToArray as $lettre){
			if(is_numeric($lettre))
            {
				$num = true;
			}
			if(preg_match("/^[a-z]*$/", $lettre))
            {
				$min = true;
			}
			if(preg_match("/^[A-Z]*$/", $lettre))
            {
				$maj = true;
			}
			if(preg_match("/^[;.,:!'`#&()+]*$/", $lettre))
            {
				$spe = true;
			}
		}

		if(!$maj || !$min || !$num || !$spe)
        {
			return(-2);
		}
        return(1);
    }
    static function Ajouter($Nom, $Prenom, $Email, $Password)
    {

        if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
        {
            return(-4);
        }
        if(self::ControlerPassword($Password) != 1)
        {
            return(-3);
        }

        $Retour = Database::retournerEnregistrement(static::$_table, 
                                    "AdresseEmail='$Email'" ,
                                    "","*",false);
        if($Retour != false)
        {
            return(-2);
        }

        $Retour = Database::retournerEnregistrement(static::$_table, 
                                    "nom='$Nom' AND prenom='$Prenom'" ,
                                    "","*",false);
        if($Retour != false)
        {
            return(-1);
        }
        $obj = new static;
        $obj->Initialiser($Nom, $Prenom, $Email, $Password);
        $Retour = $obj->ajouterEnregistrement();
        if($Retour != true)
        {
            return(-5);
        }
        return(1);
    }
    private function Initialiser($Nom, $Prenom, $Email, $Password)
    {
        $this->data["nom"] = $Nom;
        $this->data["prenom"] = $Prenom;
        $this->data["adresseEmail"] = $Email;
        $this->data["password"] = $Password;
    }
}