<?php

/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre cet autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à la classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        if(is_file('Code/' . $class . '.php')){
            require_once 'Code/' . $class . '.php';
        }
        if(is_file('../Code/' . $class . '.php')){
            require_once '../Code/' . $class . '.php';
        }
        if(is_file('../../Code/' . $class . '.php')){
            require_once '../../Code/' . $class . '.php';
        }
    }

}