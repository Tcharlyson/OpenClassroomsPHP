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

class MaClasse
{
    use B;
    public function hello()
    {
        return 1;
    }
}

$o = new ReflectionClass('MaClasse');
$o->hasMethod();
$o->hasConstant();
$o->hasProperty();
