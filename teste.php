<?php
// functions para o exercício 1
function calculaValor($num){
    $kw = 0.68;
    return $kw * $num;
}

function calculaDesconto($num){
    $kw = 0.68;
    $desconto = ($kw * $num) * 0.10;
    $totalAPagar = ($num * $kw) - $desconto;
    return $totalAPagar;
}