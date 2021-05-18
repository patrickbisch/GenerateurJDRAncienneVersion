<?php

class MessageJDR extends OutilBD{
    protected static $_table = 'jdr_message';
    protected static $_cle = 'id_message';
    protected static $TabMsg;
    
    static function Texte($IdMessage)
    {
        if(!is_array(self::$TabMsg))
        {
            self::$TabMsg = Database::retournerEnregistrement(static::$_table);
        }
        for($x = 0;$x < count(self::$TabMsg);$x++)
        {
            if(self::$TabMsg[$x]->id_message == $IdMessage)
            {
                return(self::$TabMsg[$x]->texte);
            }
        }
        return("Le message <$IdMessage> n'est pas défini");
    }
}