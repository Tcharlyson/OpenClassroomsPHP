<?php

/**
 * Created by PhpStorm.
 * User: tcharlysonplatel
 * Date: 12/01/2016
 * Time: 16:55
 */
interface Movable
{
    const MA_CONSTANTE = 'Hello';
}
echo Movable::MA_CONSTANTE;

class Personnage implements Movable
{
}

echo Personnage::MA_CONSTANTE;