<?php

use PHPUnit\Framework\TestCase;
use App\Models\Clase;

/**
 * Clase de pruebas para Clase.
 */
class ClaseTest extends TestCase
{
    /**
     * Prueba que getNombre() retorne el nombre correctamente.
     */
    public function testGetNombre(): void
    {
        $clase = new Clase("Clase de prueba", 4.5);
        $this->assertEquals("Clase de prueba", $clase->getNombre());
    }

    /**
     * Prueba que getPonderacion() retorne el valor correcto.
     */
    public function testGetPonderacion(): void
    {
        $clase = new Clase("Clase de prueba", 4.5);
        $this->assertEquals(4.5, $clase->getPonderacion());
    }

    /**
     * Prueba que getTipo() retorne el tipo "Clase".
     */
    public function testGetTipo(): void
    {
        $clase = new Clase("Clase de prueba", 5);
        $this->assertEquals("Clase", $clase->getTipo());
    }

    /**
     * Prueba que getDescripcion() devuelva la descripción con el formato correcto.
     */
    public function testGetDescripcion(): void
    {
        $clase = new Clase("Vocabulario", 5);
        $this->assertEquals("Clase: Vocabulario | 5/5", $clase->getDescripcion());
    }
}
