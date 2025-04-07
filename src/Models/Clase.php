<?php

namespace App\Models;

/**
 * Representa una clase de idioma.
 *
 * @package App\Models
 */
class Clase extends Recurso
{
    /**
     * @var float Ponderación de la clase (valor del 1 al 5).
     */
    private float $ponderacion;

    /**
     * Constructor de la clase.
     *
     * @param string $nombre Nombre de la clase.
     * @param float $ponderacion Valor de ponderación de la clase.
     */
    public function __construct(string $nombre, float $ponderacion)
    {
        parent::__construct($nombre);
        $this->ponderacion = $ponderacion;
    }

    /**
     * Obtiene la ponderación de la clase.
     *
     * @return float Ponderación de la clase.
     */
    public function getPonderacion()
    {
        return $this->ponderacion;
    }

    /**
     * Obtiene el tipo de recurso.
     *
     * @return string Tipo del recurso ("Clase").
     */
    public function getTipo()
    {
        return 'Clase';
    }

    /**
     * Devuelve una descripción formateada de la clase.
     *
     * @return string Descripción del recurso.
     */
    public function getDescripcion()
    {
        return "{$this->getTipo()}: {$this->nombre} | {$this->ponderacion}/5";
    }
}
