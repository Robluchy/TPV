SELECT * FROM productos;
SELECT * FROM categorias;
SELECT * FROM clientes;
SELECT * FROM facturas;
SELECT * FROM productos;

select id_producto, productos.nombre, cantidad, descripcion, precio, productos.foto, nombre_categoria 
from productos, categorias 
where id_producto = 2 
and productos.categoria = categorias.id_categoria