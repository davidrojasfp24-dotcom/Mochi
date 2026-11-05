<?php
include_once("config/dataBase.php");
include_once("models/Mochi.php");

class MochiDAO
{
    public static function getAll()
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM productos");
        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];
        while ($producto = $result->fetch_object("Mochi")) {
            $productos[] = $producto;
        }

        $stmt->close();
        $con->close();

        return $productos;
    }

    public static function getById($id)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $producto = $result->fetch_object("Mochi");

        $stmt->close();
        $con->close();

        return $producto ?: null;
    }

    public static function store($producto)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("INSERT INTO productos (categoria_id, nombre, descripcion, precio, imagen, activo) VALUES (?, ?, ?, ?, ?, ?)");

        $categoria_id = $producto->getCategoria_id();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $activo = $producto->getActivo();
        
        $imagen = $producto->getImagen();
        if ($imagen === "") {
            $imagen = null;
        }

        // Tipos: i (int), s (string), s (string), d (double), s (string), i (int) -> "issdsi"
        $stmt->bind_param("issdsi", $categoria_id, $nombre, $descripcion, $precio, $imagen, $activo);
        $stmt->execute();
        $stmt->close();
        $con->close();
        
    }

    public static function update($producto)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("UPDATE productos SET (categoria_id, nombre, descripcion, precio, imagen, activo) WHERE id = ?");

        $categoria_id = $producto->getCategoria_id();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $imagen = $producto->getImagen();
        $activo = $producto->getActivo();
        $id = $producto->getId();

        // Tipos: i (int), s (string), s (string), d (double), s (string), i (int) -> "issdsi"
        $stmt->bind_param("issdsi", $categoria_id, $nombre, $descripcion, $precio, $imagen, $activo);
        $stmt->execute();

        $stmt->close();
        $con->close();
    }

    public static function destroy($id)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $stmt->close();
        $con->close();
    }
}