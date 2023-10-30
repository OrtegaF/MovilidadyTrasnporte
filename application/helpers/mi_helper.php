<?php

function encripta($cadena){
	return base64_encode(base64_encode(base64_encode($cadena)));
}

function desencripta($cadena){
	return base64_decode(base64_decode(base64_decode($cadena)));
}

function calculaedad($fechanacimiento){
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0)
    $ano_diferencia--;
  return $ano_diferencia;
}