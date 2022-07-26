CREATE TABLE categorias (
  id int AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(20) NOT NULL
);

CREATE TABLE secciones (
  id int AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(20) NOT NULL,
  categoria_id int 
);

CREATE TABLE recursos (
  id int AUTO_INCREMENT PRIMARY KEY,
  imagen varchar(500) NOT NULL,
  titulo varchar(60) NOT NULL,
  descripcion varchar(500) NOT NULL,
  link varchar(500) NOT NULL,
  seccion_id int 
);