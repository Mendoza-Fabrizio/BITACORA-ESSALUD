CREATE TABLE usuario (
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(80) NOT NULL,
    telefono VARCHAR(9) NOT NULL,
    contrasena VARCHAR(50) NOT NULL,
    codigo VARCHAR(4) NOT NULL,
    PRIMARY KEY (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO usuario(nombre,email,telefono,contrasena,codigo) VALUE('Hector Ramos', 'hector.ramos@ucsm.edu.pe','958091440','carrocarro123','5124')