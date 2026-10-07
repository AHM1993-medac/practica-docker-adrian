<?php

declare(strict_types=1);

/**
* =====================================================================
* inc/heroe.php · Reglas del juego y datos del héroe [CE 2.c]
* =====================================================================
* Autor/a: Adrián
* Variante: B
*/

// Constantes comunes
const XP_POR_NIVEL = 400;
const VIDA_BASE = 50;
const BLOQUES_BARRA = 20;

// Constantes de la variante B
const CLASE_HEROE = 'Hechicero';
const MULT_VIDA = 1;
const NOMBRE_RIVAL = 'Dragón de Obsidiana';

// Constante definida con define()
define('PODER_RIVAL', 650);

// Datos del héroe
$nombreHeroe = 'Aldric <el Arcano>';

$apodo = null;
$lema = '';

$fuerzaTxt = '8';
$destrezaTxt = '11';
$inteligenciaTxt = '19';
$constitucionTxt = '10';

$experienciaTxt = '3120';
$vidaActualTxt = '41';
$oroTxt = '987.4';

$esVeterano = false;

