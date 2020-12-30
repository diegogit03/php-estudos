<div class="titulo">Erros personalizados</div>

<?php
class FaixaEtariaExeption extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo 'Erro personalizado: $message <br/>';
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if ($idade < 18) {
        throw new FaixaEtariaExeption('Ainda está muito longe');
    }
    if ($idade > 70 ) {
        throw new FaixaEtariaExeption('Ja deveria estar aposentado');
    }

    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80];

foreach($idadesAvaliadas as $idade) {
    try {
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo 'Idade: '. $idade. ', '. $tempoRestante. ' anos restantes!<br />';
    } catch(FaixaEtariaExeption $e) {
        echo 'Não foi possivel calcular para '. $idade. ' anos.<br />';
        echo 'Motivo: '. $e->getMessage(). '<br />';
    }
}
