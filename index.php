<?php
/**
 * Soma 2 ou 3 números
 * 
 * @param float $num1 Primeiro número a ser somado
 * @param float $num2 Segundo número a ser somado
 * @param float $num3 Terceiro número opcional a ser somado
 * 
 * @return float Soma dos números
 */
function somar(float $num1, float $num2, float $num3 = null):float
{
    if ($num3){ return $num1 + $num2 + $num3;
    }else
    return $num1 + $num2 + $num3;
}
echo somar(5, 23);
echo'<br/>';


/**
 * Verifica a idade da pessoa
 * 
 * @param int $anoNascimento Ano de nascimento da pessoa
 * 
 * @return int Idade da pessoa
 */
function verificaIdade(int $anoNascimento): int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
echo verificaIdade(2006);
echo '<br/>';

/**
 * Verifica se pode entrar na balada
 * 
 * @param int $anoNascimento Ano que a pessoa nasceu
 * @param bool $acompanhado Verifica se a pessoa está acompanhada
 * 
 * @return string Verificação 
 */
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


/**
 * Gera uma string de saudação
 * 
 * @param string $nome Nome da pessoa
 * @param string $sobrenome Sobrenome da pessoa
 * @param int $idade Idade da pessoa
 * 
 * @return string Saudação
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string
{
    return "Olá, $nome $sobrenome. Você tem $idade anos.";
}
echo parametrosNomeados('Davi', 'Guerra', 18);


/**
 * Diminui dois números
 * 
 * @param float $n1 Primeiro número a ser diminuido
 * @param float $n2 Segundo número a ser diminuido
 * 
 * @return float Diminuição dos dois números
 */
function diminuir (float $n1, float $n2): float 
{
    return $n1 - $n2;
}
echo diminuir (n2: -30, n1:-43);
