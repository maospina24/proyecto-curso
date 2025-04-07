<?php

/**
 * Busqueda recursos (clases o exámenes) por nombre.
 *
 * Uso:
 * php main.php buscar "valor"
 *
 * Este script conecta con la base de datos, realiza la búsqueda del valor ingresado
 * y muestra los resultados formateados por consola.
 */

require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;
use App\Repository\RecursoRepository;

// Obtener valor de búsqueda consola
$valBusqueda = $argv[2] ?? '';

// Validadores
if (empty($valBusqueda)) {
    echo "Por favor, ingresa un valor de búsqueda.\n";
    exit(1);
}

if (strlen($valBusqueda) < 3) {
    echo "Por favor, ingresa un valor de búsqueda de al menos 3 caracteres.\n";
    exit(1);
}

// Instanciar conexión y repositorio
$conexion = new Connection();
$repositorio = new RecursoRepository($conexion);

// Buscar recursos que coincidan con el valor
$recursos = $repositorio->busquedaPorNombre($valBusqueda);

// Mostrar resultados
if (empty($recursos)) {
    echo "No se encontraron resultados para \"$valBusqueda\".\n";
    exit(0);
}

foreach ($recursos as $recurso) {
    echo $recurso->getDescripcion() . PHP_EOL;
}
