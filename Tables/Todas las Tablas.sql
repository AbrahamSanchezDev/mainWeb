CREATE TABLE registros(
    ID_registros INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    ID_usuario INT,
    registro TEXT NOT NULL,
    fecha TIMESTAMP NOT NULL DEFAULT current_timestamp()
);

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

CREATE TABLE Tienda(
 ID_tienda INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 NombreDeProducto VARCHAR(21), 
 Precio FLOAT, 
 Existencias INT, 
 Caducidad VARCHAR(21) 
);

CREATE TABLE Venta( 
    ID_productos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NombreDeProducto VARCHAR(21), 
    CantidadDeProductos INT, 
    Total INT 
);

CREATE TABLE Inventario( 
    ID_productos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NombreDeProducto VARCHAR(21), 
    ExistenciasIniciales INT, 
    Entradas INT,
    Salidas INT,
    Stock INT
);

CREATE TABLE Empleados( 
    ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(21), 
    Apellido VARCHAR(21), 
    Puesto VARCHAR(21)  
);

CREATE TABLE Creditos( 
    ID_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(21), 
    Apellido VARCHAR(21), 
    FechaDeCompra VARCHAR(21),
    FechaDePago VARCHAR(21),
    TotalDeCompra FLOAT
);

CREATE TABLE estudiantes(
    ID_estudiantes INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR(21),
    apellido_P VARCHAR(21),
    apellido_M VARCHAR(21),
    matricula VARCHAR(20)  
);


CREATE TABLE formulario(
 ID_formulario INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 Nombre text, 
 Apellido text, 
 Telefono text,
 Colonia text,
 Direccion text,
 Servicio text,
 Correo text,
 Fecha_de_cita text,
 Fecha_de_hoy text,
 Quien_lo_atendio text
);