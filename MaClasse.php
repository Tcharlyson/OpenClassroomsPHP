<?php

/**
 * Created by PhpStorm.
 * User: tcharlysonplatel
 * Date: 12/01/2016
 * Time: 16:55
 */
interface Movable
{
    public function move($dest);
}

class Personnage implements Movable
{
    public function move($dest)
    {

    }
}