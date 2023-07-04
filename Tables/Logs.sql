CREATE TABLE registros(
    ID_registros INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    ID_usuario INT,
    registro TEXT NOT NULL,
    fecha TIMESTAMP NOT NULL DEFAULT current_timestamp()
);