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

if ($parent = $o->getParentClass())
{
    echo 'La classe Magicien a un parent : il s\'agit de la classe ', $parent->getName();
}
else
{
    echo 'La classe Magicien n\'a pas de parent';
}