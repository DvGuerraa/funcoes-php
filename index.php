<?php

function somar($num1, $num2, $num3 = null){
    if ($num3){ return "Número 1:  $num1, Número 2: $num2, Número 3: $num3";
    }else
    return "Número 1:  $num1, Número 2: $num2, Número 3: $num3";
}


function verificaIdade($anoNascimento){
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

function portaoDeBalada($anoNascimento, $acompanhado = false){
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