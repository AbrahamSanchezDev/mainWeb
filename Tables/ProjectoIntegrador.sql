CREATE TABLE carreras(
    ID_carrera INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Nombre VARCHAR(21)
);
CREATE TABLE edificios(
    ID_edificio INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Nombre VARCHAR(21),
    Posicion_z FLOAT,
    Posicion_x FLOAT,
    Descripcion TEXT  
);

CREATE TABLE salones(
    ID_salon INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Nombre VARCHAR(21),
    ID_edificio INT,
    FOREIGN KEY (ID_edificio) REFERENCES edificios(ID_edificio)    
);

CREATE TABLE horarios(
    ID_horario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Horario_Inicio TIME,
    Horario_Fin TIME,
    Dia VARCHAR(21),
    Nombre_materia VARCHAR(21),
    ID_salon INT,
    FOREIGN KEY (ID_salon) REFERENCES salones(ID_salon)    
);
CREATE TABLE usuario(
    ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    Nombre VARCHAR(21),
    Apellido_P VARCHAR(21),
    Apellido_M VARCHAR(21),
    Matricula INT,
    ID_Carrera INT,
    Grado VARCHAR(2),
    Grupo VARCHAR(2), 
    NumeroDeEmpleado INT,
    FOREIGN KEY (ID_Carrera) REFERENCES carreras(ID_Carrera)    
);