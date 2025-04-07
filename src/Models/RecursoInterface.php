<?php

namespace App\Models;

/**
 * Interface que define un recurso (como una clase o un examen).
 *
 * Todas las clases que representen recursos deben implementar esta interfaz.
 *
 * @package App\Models
 */
interface RecursoInterface
{
    /**
     * Obtiene el nombre del recurso.
     *
     * @return string Nombre del recurso.
     */
    public function getNombre();

    /**
     * Obtiene el tipo del recurso.
     *
     * @return string Tipo del recurso.
     */
    public function getTipo();

    /**
     * Devuelve una descripción legible del recurso.
     *
     * @return string Descripción formateada.
     */
    public function getDescripcion();
}
