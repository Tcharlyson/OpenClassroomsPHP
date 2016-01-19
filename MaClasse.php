<?php

/**
 * Created by PhpStorm.
 * User: tcharlysonplatel
 * Date: 12/01/2016
 * Time: 16:55
 */
class MaClasse implements SeekableIterator, ArrayAccess, Countable
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
    public function offsetExists($offset)
    {
        return isset($this->tableau[$offset]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return $this->tableau[$offset];
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        $this->tableau[$offset] = $value;
    }

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        unset($this->tableau[$offset]);
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->tableau);
    }
}

$objet = new MaClasse;

echo 'Parcours de l\'objet...<br />';
foreach ($objet as $key => $value)
{
    echo $key, ' => ', $value, '<br />';
}

echo '<br />Remise du curseur en troisième position...<br />';
$objet->seek(2);
echo 'Élément courant : ', $objet->current(), '<br />';

echo '<br />Affichage du troisième élément : ', $objet[2], '<br />';
echo 'Modification du troisième élément... ';
$objet[2] = 'Hello world !';
echo 'Nouvelle valeur : ', $objet[2], '<br /><br />';

echo 'Actuellement, mon tableau comporte ', count($objet), ' entrées<br /><br />';

echo 'Destruction du quatrième élément...<br />';
unset($objet[3]);

if (isset($objet[3]))
{
    echo '$objet[3] existe toujours... Bizarre...';
}
else
{
    echo 'Tout se passe bien, $objet[3] n\'existe plus !';
}

echo '<br /><br />Maintenant, il n\'en comporte plus que ', count($objet), ' !';
