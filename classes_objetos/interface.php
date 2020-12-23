<div class="titulo">Interfaces</div>

<?php
interface Animal {
    function respirar(): string;
}

interface Mamifero {
    function mamar(): string;
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

class Cachorro implements Canino {
    public function respirar(): string {
        return 'Irei usar oxigênio! <br/>';
    }

    public function latir(): string {
        return 'Au Au';
    }

    public function mamar(): string {
        return 'Irei usar leite!';
    }
}

$animal = new Cachorro;
echo $animal->respirar(). '<br/>';
echo $animal->latir(). '<br/>';
echo $animal->mamar(). '<br/>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
echo '<br/>';
echo 'Fim!';
