<?php

function somar(float $num1, float $num2, float $num3 = null):float
{
    if ($num3){ return $num1 + $num2 + $num3;
    }else
    return $num1 + $num2 + $num3;
}


function verificaIdade(int $anoNascimento): int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

function portaoDeBalada(int $anoNascimento, bool $acompanhado = false): string
{
    $idadeParaEntrarBalada = 18;
    $idade = verificaIdade($anoNascimento);
    if ($idade >= $idadeParaEntrarBalada){
        return "Pode entrar na balada";
    }elseif ($idade < $idadeParaEntrarBalada && $acompanhado) {
        return 'Pode entrar na balada com seu acompanhante';
    } else{
        return 'Você NÃO pode entrar na balada';
    }
}

echo '1994 sem acompanhante: '.portaoDeBalada(1994).'<br/>';
echo '1999 com acompanhante: '.portaoDeBalada(1999, true).'<br/>';
echo '2010 com acompanhante: '.portaoDeBalada(2014, true).'<br/>';
echo '2015 sem acompanhante: '.portaoDeBalada(2015).'<br/>';