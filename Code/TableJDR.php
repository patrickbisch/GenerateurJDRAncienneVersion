<?php

class TableJDR extends OutilBD{
    protected static $_table = 'jdr_table';
    protected static $_cle = 'id_campagne, id_joueur';
    
    static function ListeTable()
    {
        $Liste = Database::retournerEnregistrement(
                static::$_table . ", jdr_joueur", 
                "jdr_table.id_joueur = jdr_joueur.id_joueur", 
                "id_campagne, nom, prenom", 
                "id_campagne, jdr_table.id_joueur, nom, prenom, adresseEmailErreur");
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