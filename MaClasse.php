<?php

/**
 * Created by PhpStorm.
 * User: tcharlysonplatel
 * Date: 12/01/2016
 * Time: 16:55
 */
class MaClasse
{
    public function __call($nom, $arguments)
    {
        echo 'La méthode <strong>', $nom, '</strong> a été appelée alors qu\'elle n\'existe pas ! Ses arguments étaient les suivants : <strong>', implode($arguments, '</strong>, <strong>'), '</strong>';
    }
}

$obj = new MaClasse;

$obj->methode(123, 'test');
