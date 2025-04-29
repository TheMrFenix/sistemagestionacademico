CREATE TABLE usuarios (
    id_usuario  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres     VARCHAR(255) NOT NULL,
    cargo       VARCHAR(255) NOT NULL,
    email       VARCHAR(255) NOT NULL UNIQUE KEY,
    password    TEXT NOT NULL,

    fyh_creacion    DATETIME NULL,
    fyh_actualizacion   DATETIME NULL,
    estado      VARCHAR (11)
)ENGINE=InnoDB;
INSERT INTO usuarios (nombres,cargo,email,password,fyh_creacion,estado) 
VALUES ('Stefano Hurtado','Administrador','admin@admin.com','$2y$10$DJUmMV3TBlW4fXGr76rkSOZoI9ZcYJ0kqOf5V2HGAZ8j7ZtznONGu','2025-4-28 11:58:30','1');

CREATE TABLE roles (
    id_rol  INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol     VARCHAR(255) NOT NULL UNIQUE KEY,
    
    fyh_creacion    DATETIME NULL,
    fyh_actualizacion   DATETIME NULL,
    estado      VARCHAR (11)

)ENGINE=InnoDB;
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('ADMINISTRADOR','2025-4-28 21:31:30','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ACADEMICO','2025-4-28 21:31:30','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('DIRECTOR ADMINISTRATIVO','2025-4-28 21:31:30','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('CONTADOR','2025-4-28 21:31:30','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('SECRETARIA','2025-4-28 21:31:30','1');