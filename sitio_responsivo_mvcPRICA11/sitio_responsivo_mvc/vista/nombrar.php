<?php

function nombrar_pagina($seccion){
    $nombrepagina = "";

    if($seccion == "seccion1"){
        $nombrepagina = 'HOME';
    }
    elseif($seccion == "seccion2"){
        $nombrepagina = 'REGISTRO';
    }
    elseif($seccion == "seccion3"){
        $nombrepagina = 'BIENVENIDA';
    }
    elseif( $seccion == "seccion4"){
        $nombrepagina = 'inicio_Sesion';
    }
    return $nombrepagina;

}