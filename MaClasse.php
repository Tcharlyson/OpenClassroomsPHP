<?php
trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

trait B
{
    use A;

    public function saySomethingElse()
    {
        echo 'Je suis le trait B !';
    }
}
class MaclasseParent
{

}
class MaClasse extends MaclasseParent
{
    use B;
    public function hello()
    {
        return 1;
    }
}

$o = new ReflectionClass('MaClasse');

// Est-elle abstraite ?
if ($o->isAbstract())
{
    echo 'La classe Personnage est abstraite';
}
else
{
    echo 'La classe Personnage n\'est pas abstraite';
}

// Est-elle finale ?
if ($o->isFinal())
{
    echo 'La classe Personnage est finale';
}
else
{
    echo 'La classe Personnage n\'est pas finale';
}