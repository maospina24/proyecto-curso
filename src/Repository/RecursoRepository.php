<?php

namespace App\Repository;

use App\Models\Clase;
use App\Models\Examen;
use App\Models\ResourceInterface;
use App\Database\Connection;
use App\Factory\RecursoFactory;
use PDO;

/**
 * Repositorio para buscar recursos en la base de datos.
 */
class RecursoRepository
{
    /**
     * Conexión a la base de datos.
     *
     * @var PDO
     */
    private PDO $pdo;

    /**
     * Constructor del repositorio.
     *
     * @param Connection $connection Conexión a la base de datos.
     */
    public function __construct(Connection $connection)
    {
        $this->pdo = $connection->getConnection();
    }

    /**
     * Busca recursos cuyo nombre coincida con el valor dado.
     *
     * @param string $valBusqueda valor de búsqueda.
     * @return ResourceInterface[] Lista de recursos encontrados.
     */
    public function busquedaPorNombre(string $valBusqueda): array
    {
        $resultado = [];

        // Buscar clases
        $sqlClases = "SELECT nombre, ponderacion FROM clases WHERE nombre LIKE :nombre";
        $stmt = $this->pdo->prepare($sqlClases);
        $stmt->execute(['nombre' => "%$valBusqueda%"]);

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $resultado[] = RecursoFactory::crear('clase', $fila);
        }

        // Buscar exámenes
        $sqlExamenes = "SELECT nombre, tipo FROM examenes WHERE nombre LIKE :nombre";
        $stmt = $this->pdo->prepare($sqlExamenes);
        $stmt->execute(['nombre' => "%$valBusqueda%"]);

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $resultado[] = RecursoFactory::crear('examen', $fila);
        }

        return $resultado;
    }
}
