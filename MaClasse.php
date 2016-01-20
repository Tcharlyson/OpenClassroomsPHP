<?php
trait MonTrait
{
    public function hello()
    {
        echo 'Hello world !';
    }
}

class A
{
    use MonTrait;
}

class B
{
    use MonTrait;
}

$a = new A;
$a->hello(); // Affiche « Hello world ! ».

$b = new b;
$b->hello(); // Affiche aussi « Hello world ! ».in du script'; // Ce message s'affiche, cela prouve bien que le script est exécuté jusqu'au bout.