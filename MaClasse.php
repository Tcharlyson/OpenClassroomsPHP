<?php
class A
{
    public final function hello($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
    {
        echo 'Hello world !';
    }
}

$classeA = new ReflectionClass('A');
$methode = $classeA->getMethod('hello');

echo 'La méthode ', $methode->getName(), ' est ';

if ($methode->isAbstract())
{
    echo 'abstraite';
}
elseif ($methode->isFinal())
{
    echo 'finale';
}
else
{
    echo '« normale »';
}