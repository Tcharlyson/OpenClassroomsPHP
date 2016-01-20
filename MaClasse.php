<?php
trait MonTrait
{
    public function speak()
    {
        echo 'Je suis un trait !';
    }
}

class Mere
{
    public function speak()
    {
        echo 'Je suis une classe mère !';
    }
}

class Fille extends Mere
{
    use MonTrait;
}

$fille = new Fille;
$fille->speak(); // Affiche « Je suis un trait ! »