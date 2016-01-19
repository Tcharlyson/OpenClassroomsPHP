<?php

/**
 * Created by PhpStorm.
 * User: tcharlysonplatel
 * Date: 12/01/2016
 * Time: 16:55
 */
class MaClasse implements Iterator
{
    private $position=0;
    private $tableau=['Premier','Deuxième','Troisième','Quatrième'];

    public function current()
    {
        return $this->tableau[$this->position];
    }
    public function key()
    {
        return $this->position;
    }
    public function next()
    {
        return $this->position++;
    }
    public function rewind()
    {
        return $this->position=0;
    }
    public function seek($position)
    {
        $anciennePosition = $this->position;
        $this->position=$position;
        if(!$this->valid())
        {
            trigger_error('La position spécifiée nest pas valide', E_USER_WARNING);
            $this->position=$anciennePosition;
        }
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function valid()
    {
        return isset($this->tableau[$this->position]);
    }
}

$objet = new MaClasse();

foreach($objet as $key => $value)
{
    echo $key, '=>', $value, '<br />';
}

$objet->seek(2);
$objet->rewind();
echo $objet->current();