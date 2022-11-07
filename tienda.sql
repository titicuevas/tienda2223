DROP TABLE IF EXISTS articulos CASCADE;

CREATE TABLE
    articulos (
        id bigserial PRIMARY KEY,
        codigo varchar (13) NOT NULL UNIQUE,
        descripcion varchar (255) NOT NULL,
        precio numeric (7, 2) NOT NULL,
    );


    --Carga inicial de datos de prueba:

    INSERT INTO articulos(codigo, descripcion, precio)
        VALUES('1231231231231', 'Yogur piña',200),
                ('4235231231231', 'Tigreton',50.10),
                ('3234231231231', 'SSD',250);
                