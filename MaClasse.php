<?php

trait HTMLFormater
{
    public function formatHTML($text)
    {
        return '<p>Date : '.date('d/m/Y').'</p>'."\n".
        '<p>'.nl2br($text).'</p>';
    }
}

trait TextFormater
{
    public function formatText($text)
    {
        return 'Date : '.date('d/m/Y')."\n".$text;
    }
}

class Writer
{
    use HTMLFormater, TextFormater;

    public function write($text)
    {
        file_put_contents('fichier.txt', $this->formatText($text));
    }
}

$w = new Writer;
$w->write('Hello world!');

