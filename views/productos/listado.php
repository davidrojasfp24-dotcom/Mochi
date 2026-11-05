<h1>Listado de Productos</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Imagen</th>
        <th>Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Activo</th>
        <th>Acciones</th>
    </tr>
    <?php if (empty($productos)) { ?>
        <tr>
            <td colspan="7">No hay productos todavía.</td>
        </tr>
    <?php } ?>
    <?php foreach ($productos as $producto) { ?>
        <tr>
            <td><?= (int) $producto->getId() ?></td>
            <td><img src="img/<?= htmlspecialchars($producto->getImagen(), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?>" width="100"></td>
            <td><?= (int) $producto->getCategoria_id() ?></td>
            <td><?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €</td>
            <td><?= $producto->getActivo() ? 'Sí' : 'No' ?></td>
            <td>
                <a href="?controller=producto&action=show&id=<?= (int) $producto->getId() ?>">Ver</a>
            </td>
        </tr>
    <?php } ?>
</table>
