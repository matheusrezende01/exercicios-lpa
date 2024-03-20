<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('receber/nome/idade', function (request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos';
});

Route::get('receber/nome/data/cidade', function (request $request) {
    $nome = $request->input('nome');
    $ano = $request->input('ano');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $ano . ' na cidade de ' . $cidade;
});

Route::get('calcul', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm + $numeroDois;
    return $resultado;
});

Route::get('calculo', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $numeroTres = $request->input('terceiroNumero');
    $resultado = $numeroUm - $numeroDois - $numeroTres;
    return $resultado;
});

Route::get('divi', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm / $numeroDois;
    return $resultado;
});

Route::get('multi', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm * $numeroDois;
    return $resultado;
});

Route::get('multiplicacao', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $numeroTres = $request->input('terceiroNumero');
    $numeroQuatro = $request->input('quartoNumero');
    $numeroCinco = $request->input('quintoNumero');
    $resultado = ($numeroUm + $numeroDois + $numeroTres + $numeroQuatro + $numeroCinco) / 5;
    return $resultado;
});

Route::get('receber', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroDois / $numeroUm;
    return $resultado;
});

Route::get('dobro', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $resultado = "O dobro do " . $numeroUm . " é igual a " . $numeroUm * 2;
    return $resultado;
});

Route::get('area', function (request $request) {
    $numeroUm = $request->input('base');
    $numeroDois = $request->input('altura');
    $resultado = "a area é " . $numeroUm * $numeroDois;
    return $resultado;
});

Route::get('porcentagens', function (request $request) {
    $numeroUm = $request->input('precoOriginal');
    $numeroDois = $request->input('porcentagem');
    $resultado = $numeroUm / 100;
    $resultado2 = $numeroUm - ($resultado * $numeroDois);
    return $resultado2;
});

Route::get('salario', function (request $request) {
    $numeroUm = $request->input('salario');
    $numeroDois = $request->input('aumento');
    $resultado = $numeroUm / 100;
    $resultado2 = $numeroUm . " " . $numeroDois . "% " . $resultado * $numeroDois + $numeroUm;
    return $resultado2;
});

Route::get('compra', function (request $request) {
    $numeroUm = $request->input('valorCompra');
    $resultado2 = $numeroUm / 10;
    return $resultado2;
});

Route::get('recebendo', function (request $request) {
    $numeroUm = 5;
    $numeroDois = $request->input('recebido');
    $porcentagem = $numeroDois / 100;
    $resultado2 = $numeroDois + ($porcentagem * $numeroUm);
    return $resultado2;
});

Route::get('days', function (request $request) {
    $Dias = $request->input('dias');
    $horas = $Dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = $Dias . " " . $horas . " " . $minutos . " " . $segundos;
    return $resultado;
});

Route::get('buy', function (request $request) {
    $compras = $request->input('compras');
    $quantidade = $request->input('quantidade');
    $resultado = $compras * $quantidade;
    return $resultado;
});

Route::get('exemplo/condicao', function (request $request) {
    $idade = $request->input('idade');
    $retorno = "";
    if ($idade >= 18) {
        $retorno = "maior de idade ";
    } else {
        $retorno = "Menor de idade";
    }
    return $retorno;
});

Route::get('verifica/idade', function(Request $request) {
    $idade = $request->input('idade');

    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});


Route::get('verificar/par' , function(Request $request){
    $numero = $request-> input('numero');

    if($numero % 2 == 0)
    return 'par';
else {
    return 'impar';
}


});

Route::get("receber/numero" , function(Request $request){
    $numero = $request-> input("numero"); 
    
    if($numero > 10){
        return "maior que 10";
     } else {
            return "menor que 10";
        }
    });


    Route::get("temperatura/atual" , function(Request $request){
        $temperatura = $request-> input ("temperatura atual");
      
        if($temperatura > 30){
        return "está quente";
    } else { 
              return "não esta quente";
         }
    });


    Route::get("determine/numero" , function(Request $request){
        $numero = $request-> input ('numero');
        if($numero > 0){
        return "é positivo";
        }
        if($numero < 0){
        return "é negativo";
        }
         else {
    return "é zero";
        }
    });
        


