<?php

abstract class OutilBD
{
    protected static $_table = '';
    protected static $_cle = '';
    protected $data = [];

    public static function Liste($tri = "")
    {
        return Database::retournerEnregistrement(static::$_table, "", $tri);
    }
    public static function Fiche($id)
    {
        return Database::retournerEnregistrement(static::$_table, 
                        static::$_cle."=$id", "", "", false);
    }
    public static function Index()
    {
        return Database::dernierIndex(static::$_table);
    }
    public function ajouterEnregistrement()
    {
        return  Database::insert(static::$_table, $this->data);
    }

    public function Modifier($buffer, $id = "")
    {
        if($id <> "")
        {
            $buffer[static::$_cle] = $id;
        }
        return Database::update(static::$_table, static::$_cle, $buffer);
    }

    public static function Supprimer($id){
        return Database::delete(static::$_table, static::$_cle, $id);
    }
}