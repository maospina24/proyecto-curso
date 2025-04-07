<?php

namespace App\Models;

/**
 * Representa un examen de idioma.
 *
 * @package App\Models
 */
class Examen extends Recurso
{
    /**
     * @var string Tipo de examen (selección, pregunta y respuesta, completación).
     */
    private string $tipoExamen;

    /**
     * Constructor de la clase Examen.
     *
     * @param string $nombre Nombre del examen.
     * @param string $tipoExamen Tipo del examen.
     */
    public function __construct(string $nombre, string $tipoExamen)
    {
        parent::__construct($nombre);
        $this->tipoExamen = $tipoExamen;
    }

    /**
     * Obtiene el tipo del recurso.
     *
     * @return string Tipo del recurso ("Examen").
     */
    public function getTipo()
    {
        return 'Examen';
    }

    /**
     * Obtiene el tipo específico del examen.
     *
     * @return string Tipo del examen.
     */
    public function getTipoExamen()
    {
        return $this->tipoExamen;
    }

    /**
     * Devuelve descripción.
     *
     * @return string Descripción formateada del examen por tipo fuardada en db.
     */
    public function getDescripcion()
    {
        return "{$this->getTipo()}: {$this->nombre} | {$this->tipoExamen}";
    }
}