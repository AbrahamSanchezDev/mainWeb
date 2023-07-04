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



