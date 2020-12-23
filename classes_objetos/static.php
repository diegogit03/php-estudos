<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (Estático)';

    public function mostrarA() {
        echo "Não Estática = {$this->naoStatic} <br/>";
        echo "Estática = ". self::$static. "<br/>";
    }

    public static function mostrarStaticA() {
        echo "Estática = ". self::$static. "<br/>";
    }
}

A::mostrarStaticA();
echo A::$static;
