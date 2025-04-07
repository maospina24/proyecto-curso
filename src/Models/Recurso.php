<?php

namespace App\Models;

/**
 * Clase base para recursos como Clase y Examen.
 */
abstract class Recurso implements RecursoInterface
{
    /**
     * @var string
     */
    protected string $nombre;

    /**
     * Constructor
     *
     * @param string $nombre
     */
    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Obtener el nombre del recurso.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
