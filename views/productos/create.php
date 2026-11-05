<h1>Crear producto</h1>
<p><a href="?controller=producto&action=index">Volver al listado</a></p>

<form action="?controller=producto&action=store" method="POST">
    <label>
        Categoría ID
        <select name="categoria_id" id="categoria_id">
            <option value="1">1 - Mochis</option>
            <option value="2">2 - Bebidas</option>
            <option value="3">3 - Postres</option>
        </select>
    </label>

    <label>
        Nombre
        <input type="text" name="nombre" id="nombre" required maxlength="100" required>
    </label>

    <label>
        Descripción
        <textarea name="descripcion" id="descripcion" rows="3"></textarea>
    </label>

    <label>
        Precio
        <input type="number" name="precio" id="precio" step="0.01" min="0" required>
    </label>

    <label>
        Imagen (Nombre del archivo, ej: matcha.jpg)
        <input type="text" name="imagen" id="imagen" maxlength="255">
    </label>

    <label>
        Activo
        <select name="activo" id="activo">
            <option value="1" selected>Sí</option>
            <option value="0">No</option>
        </select>
    </label>

    <button type="submit">Guardar</button>
</form>