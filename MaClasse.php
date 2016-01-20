<?php
trait MonTrait
{
    public function sayHello()
    {
        echo 'Hello !';
    }
}

class MaClasse
{
    use MonTrait;

    public function sayHello()
    {
        echo 'Bonjour !';
    }
}

$objet = new MaClasse;
$objet->sayHello(); // Affiche « Bonjour ! ».
