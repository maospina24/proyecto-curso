-- Crear base de datos si no es existente
CREATE DATABASE IF NOT EXISTS cursos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar base de datos
USE cursos;

-- Crear tabla clases
CREATE TABLE IF NOT EXISTS clases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    ponderacion DECIMAL(2,1) NOT NULL
);

-- Insertar datos clases
INSERT INTO clases (nombre, ponderacion) VALUES
('Vocabulario sobre Trabajo en Inglés', 5.0),
('Conversaciones de Trabajo en Inglés', 5.0),
('Términos Médicos en Inglés', 4.7),
('Tecnología y Redes Sociales', 4.3),
('Cultura Británica y Americana', 4.2),
('Inglés Científico Básico', 4.6),
('Redacción Académica', 4.0),
('Inglés para Negocios Internacionales', 4.9);

-- Crear tabla exámenes
CREATE TABLE IF NOT EXISTS examenes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    tipo ENUM('selección', 'pregunta y respuesta', 'completación') NOT NULL
);

-- Insertar datos exámenes
INSERT INTO examenes (nombre, tipo) VALUES
('Trabajos y ocupaciones en Inglés', 'selección'),
('Test de Términos Médicos', 'pregunta y respuesta'),
('Evaluación de Cultura General', 'selección'),
('Comprensión de Textos Científicos', 'completación'),
('Simulación de Entrevista de Trabajo', 'pregunta y respuesta'),
('Vocabulario Tecnológico', 'selección'),
('Evaluación de Redacción Académica', 'completación');
