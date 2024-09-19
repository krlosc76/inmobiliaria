CREATE DATABASE inmobiliaria;

USE inmobiliaria;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefono VARCHAR(20),
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(50) NOT NULL DEFAULT 'agente',
    imagen VARCHAR(255)
)
ENGINE=InnoDb;
INSERT INTO usuarios (nombre, email, password, rol)
VALUES ('admin', 'admin@admin.com', '$2y$10$tG2AW5rWras2nq5m7gNv7.03ySiJLWidKUIXbxx7Rp50w4qeuKh9q', 'administrador');

CREATE TABLE tipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

INSERT INTO tipos (tipo) VALUES
('casa'),
('apartamento');


CREATE TABLE propiedades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    modalidad ENUM('arriendo', 'venta') NOT NULL,
    tipo_id INT NOT NULL,
    habitaciones INT NOT NULL,
    bano INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    area DECIMAL(10, 2),
    imagenes JSON,
    direccion VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    estado VARCHAR(255),
    pais VARCHAR(255) NOT NULL,
    latitud DECIMAL(10, 8),
    longitud DECIMAL(11, 8),
    usuario_id INT NOT NULL,
    FOREIGN KEY (tipo_id) REFERENCES tipos(id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
) ENGINE=InnoDB;

CREATE TABLE caracteristicas_internas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    caracteristica VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE propiedades_internas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    propiedad_id INT NOT NULL,
    interna_id INT NOT NULL,
    FOREIGN KEY (propiedad_id) REFERENCES propiedades(id),
    FOREIGN KEY (interna_id) REFERENCES caracteristicas_internas(id)
) ENGINE=InnoDB;

CREATE TABLE caracteristicas_externas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    caracteristica VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE propiedades_externas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    propiedad_id INT NOT NULL,
    externa_id INT NOT NULL,
    FOREIGN KEY (propiedad_id) REFERENCES propiedades(id),
    FOREIGN KEY (externa_id) REFERENCES caracteristicas_externas(id)
) ENGINE=InnoDB;



