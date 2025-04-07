
# Buscador de recursos Clases y Exámenes (PHP Consola)

Aplicación de consola desarrollada en PHP. Permite buscar clases y exámenes por coincidencia parcial del nombre (mínimo tres caracteres) y mostrar resultados diferenciados según el tipo de recurso.

---

## Requisitos del sistema

- PHP 8.1 o superior
- Composer
- MySQL (mediante XAMPP)
- PHPUnit
- Entorno Linux (aunque funciona también en macOS y Windows con XAMPP)

**Nota:** Este proyecto fue desarrollado y probado utilizando XAMPP (macOS)

---

## Instalación

1. **Clonar repositorio:**

```bash
git clone https://github.com/maospina24/proyecto-curso.git
cd proyecto-curso
```

2. **Instalación dependencias (PSR-4 Autoload):**

```bash
composer install
```

3. **Configuración de la base de datos MySQL:**

Ejecutar el script SQL que crea la base de datos `cursos` y sus tablas:

```bash
/Applications/XAMPP/xamppfiles/bin/mysql -u root -p -h 127.0.0.1 < sql/setup.sql
```

> Si se está en Windows o Linux, utilizar el comando correspondiente a la instalación de MySQL o desde el panel de XAMPP.

---

## Ejecución de la aplicación

Desde la raíz del proyecto:

```bash
php main.php search <valor>
```

Ejemplo:

```bash
php main.php search trabajo
```

Resultado:

```
Clase: Vocabulario sobre Trabajo en Inglés | 5/5
Clase: Conversaciones de Trabajo en Inglés | 4.5/5
Examen: Trabajos y ocupaciones en Inglés | Selección
Examen: Simulación de Entrevista de Trabajo | pregunta y respuesta
```

---

## Pruebas

Para correr las pruebas unitarias con PHPUnit:

```bash
./vendor/bin/phpunit
```

Salida esperada:

```
PHPUnit 12.1.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.5

........                                                            8 / 8 (100%)

Time: 00:00.004, Memory: 8.00 MB
```

---

## Estructura del proyecto

```bash
proyecto-php/
│
├── main.php                    # Archivo principal de ejecución
├── composer.json              # Autoload PSR-4 y metadata
├── sql/setup.sql             # Script de base de datos
├── tests/                    # Pruebas unitarias
│
└── src/                      
    ├── Models/
    │   ├── RecursoInterface.php
    │   ├── Clase.php
    │   ├── Examen.php
    │   └── Recurso.php         # Clase abstracta base
    │
    ├── Repository/
    │   └── RecursoRepository.php
    │
    └── Factory/
        └── RecursoFactory.php
```

---

## Base de datos

La base de datos se llama `cursos` y contiene dos tablas:

- `clases`:
  - `id`, `nombre`, `ponderacion`
  
- `examenes`:
  - `id`, `nombre`, `tipo`  
    (tipos válidos: **selección**, **pregunta y respuesta**, **completación**)

El script para su creación se encuentra en: `sql/setup.sql`

---

## Autor

Desarrollado por **Miguel Ospina**  
miguel24ospina1@gmail.com

---

## Licencia

MIT