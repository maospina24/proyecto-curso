<?php

namespace App\Factory;

use App\Models\Clase;
use App\Models\Examen;
use App\Models\ResourceInterface;

/**
 * Factory para crear instancias de recursos como Clases o Exámenes.
 *
 * @package App\Factory
 */
class RecursoFactory
{
    /**
     * Crea una instancia de recurso.
     *
     * @param string $tipo Tipo de recurso.
     * @param array $datos Datos necesarios para crear el recurso.
     *
     * @return ResourceInterface Instancia del recurso creado.
     *
     * @throws \InvalidArgumentException Si el tipo no es reconocido.
     */
    public static function crear(string $tipo, array $datos)
    {
        switch ($tipo) {
            case 'clase':
                return new Clase($datos['nombre'], $datos['ponderacion']);
        
            case 'examen':
                return new Examen($datos['nombre'], $datos['tipo']);
        
            default:
                throw new \InvalidArgumentException("Recurso desconocido: $tipo");
        }
    }
}
