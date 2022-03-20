SELECT * FROM productos;
SELECT * FROM categorias;
SELECT * FROM clientes;

SELECT * FROM compras;
SELECT * FROM empleados;


select id_producto, productos.nombre, cantidad, descripcion, precio, productos.foto, nombre_categoria 
from productos, categorias 
where id_producto = 2 
and productos.categoria = categorias.id_categoria;


INSERT INTO `compras` ( `fecha`, `importe`, `cliente`, `empleado`) VALUES
(20770203, 1232, 2, 1),(20770204, 13, 3, 2),(20770204, 23, 4, 3);

INSERT INTO `facturas` ( `cantidad`, `total`,`fecha`, `producto`, `compra`) VALUES
(1, 1232,20770203, 2, 1),(1, 13,20770203, 32, 2),(1, 23,20770203, 12, 3);

SET GLOBAL FOREIGN_KEY_CHECKS=0;
SET FOREIGN_KEY_CHECKS=0;