<?php

use PHPUnit\Framework\TestCase;
use App\Models\Examen;

/**
 * Clase de prueba unitaria para Examen.
 */
class ExamenTest extends TestCase
{
    /**
     * Verifica que getNombre() retorne el nombre del examen.
     */
    public function testGetNombre(): void
    {
        $examen = new Examen("Examen 1", "Selección");
        $this->assertEquals("Examen 1", $examen->getNombre());
    }

    /**
     * Verifica que getTipoExamen() retorne el tipo de examen.
     */
    public function testGetTipoExamen(): void
    {
        $examen = new Examen("Examen 2", "Pregunta y respuesta");
        $this->assertEquals("Pregunta y respuesta", $examen->getTipoExamen());
    }

    /**
     * Verifica que getTipo() retorne la cadena "Examen".
     */
    public function testGetTipo(): void
    {
        $examen = new Examen("Examen 3", "Completación");
        $this->assertEquals("Examen", $examen->getTipo());
    }

    /**
     * Verifica que getDescripcion() retorne el formato correcto de descripción.
     */
    public function testGetDescripcion(): void
    {
        $examen = new Examen("Ocupaciones", "Selección");
        $this->assertEquals("Examen: Ocupaciones | Selección", $examen->getDescripcion());
    }
}
