<?php

namespace App\Database;

use PDO;
use PDOException;

/**
 * Clase encargada de manejar la conexión a la base de datos.
 *
 * @package App\Database
 */
class Connection
{
    /**
     * @var string Dirección del host de la base de datos.
     */
    private string $host = '127.0.0.1';

    /**
     * @var string Nombre de la base de datos.
     */
    private string $dbname = 'cursos';

    /**
     * @var string Nombre de usuario db.
     */
    private string $user = 'root';

    /**
     * @var string Contraseña.
     */
    private string $password = '';

    /**
     * @var PDO|null Instancia de conexión.
     */
    private ?PDO $pdo = null;

    /**
     * Devuelve una conexión a la base de datos. La crea si aún no existe.
     *
     * @return PDO Objeto de conexión.
     */
    public function getConnection(): PDO
    {
        if ($this->pdo === null) {
            try {
                $this->pdo = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
                    $this->user,
                    $this->password
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }

        return $this->pdo;
    }
}
