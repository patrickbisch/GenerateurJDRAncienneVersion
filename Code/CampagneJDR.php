<?php

class CampagneJDR extends OutilBD{
    protected static $_table = 'jdr_campagne';
    protected static $_cle = 'id_campagne';
    public $id_campagne;

    
    static function ListeCampagne()
    {
        $Liste = Database::retournerEnregistrement(
                static::$_table . ", jdr_type, jdr_joueur", 
                "id_jdr = id_type AND id_maitre = id_joueur", 
                "campagne", 
                "id_campagne, campagne, id_jdr, type, referenceErreur, id_maitre, nom, prenom, adresseEmailErreur, nbJoueur");
        return($Liste);
    }


/*    
    public function getProduits(){

        return Database::selectByJoin("produit", "liste", "id_magasin=$this->id_magasin");

    }

    public static function build($nom = "", $contact = "", $id_magasin = null){
        $obj = new static;
        $obj->nom = $nom;
        $obj->contact = $contact;
        $obj->id_magasin = $id_magasin;
        $obj->createData();
        return $obj;
    }
    
    public function createData(){
        $this->data["id_magasin"] = $this->id_magasin;
        $this->data["nom"] = $this->nom;
        $this->data["contact"] = $this->contact;
    }
*/
}