<?php

class Personnage{
    public $id_personnage;
    public $Donnee = array("","","","","","");
    public $Label;
    public $Avantage;
    public $Desavantage;
    public $Trait;

    function Charger($id)
    {
        $txt = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
        for($x = 0; $x < count($txt);$x++)
        {
            $tb = MessageQIN::Fiche((int)$txt[$x]);
            $this->Label[$x] = $tb->texte;
        }
        $this->id_personnage = $id;
        if($id > 0)
        {
            $tb = PersonnageQIN::Fiche((int)$id);
            $joueur = JoueurJDR::Fiche((int)$tb->id_joueur);
            $this->Avantage = AvantageQIN::Fiche((int)$tb->id_avantage);
            $this->Desavantage = DesavantageQIN::Fiche((int)$tb->id_desavantage);
            $this->Donnee[0] = $tb->nom;
            $this->Donnee[1] = $joueur->prenom . " " .$joueur->nom;
            $this->Donnee[2] = $tb->classe;
            $this->Donnee[3] = $tb->age;
            $this->Donnee[4] = $this->Avantage->texte;
            $this->Donnee[5] = $this->Desavantage->texte;
            $this->Trait = explode("/",$tb->trait);
        }
        else
        {
            $this->Donnee = array("","","","20","","");
            $this->Avantage = AvantageQIN::Liste("texte");
            $this->Desavantage = DesavantageQIN::Liste("texte");
            $this->Trait = array(1,1,1,1,1);
        }
    }
    function Etat()
    {
        if($this->Donnee[0] == "") 
        {
            return("Vous devez saisir un nom");
        }
        if($this->Donnee[1] == "") 
        {
            return("Vous devez saisir un joueur");
        }
        if($this->Donnee[2] == "") 
        {
            return("Vous devez saisir une classe");
        }
        if($this->Donnee[3] == "") 
        {
            return("Vous devez saisir un age");
        }
        if($this->Donnee[4] == "") 
        {
            return("Vous devez saisir un nom");
        }
        if(($this->Donnee[5] == "") AND ($this->Donnee[6] != ""))
        {
            return("Vous devez saisir un avantage");
        }
        if(($this->Donnee[5] != "") AND ($this->Donnee[6] == ""))
        {
            return("Vous devez saisir un désavantage");
        }
        return("");
    }
}
