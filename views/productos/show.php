<h1>Detalle del producto</h1>
<p><a href="?controller=producto&action=index">Volver al listado</a></p>

<p><strong>ID:</strong> <?= (int) $producto->getId() ?></p>
<p><strong>Categoría ID:</strong> <?= (int) $producto->getCategoria_id() ?></p>
<p><strong>Nombre:</strong> <?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Descripción:</strong> <?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Precio:</strong> <?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €</p>
<p><strong>Activo:</strong> <?= $producto->getActivo() ? 'Sí' : 'No' ?></p>
<p><strong>Imagen:</strong> <img src="img/<?= htmlspecialchars($producto->getImagen(), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?>" width="100"></p>