CREATE TABLE categorias (
  id serial PRIMARY KEY,
  nombre varchar(60) NOT NULL,
  descripcion varchar(500) NOT NULL
);

CREATE TABLE secciones (
  id serial PRIMARY KEY,
  nombre varchar(60) NOT NULL,
  descripcion varchar(500) NOT NULL,
  categoria_id int 
);

CREATE TABLE recursos (
  id serial PRIMARY KEY,
  imagen varchar(500) NOT NULL,,
  titulo varchar(60) NOT NULL,
  descripcion varchar(500) NOT NULL,
  link varchar(500) NOT NULL,
  seccion_id int 
);