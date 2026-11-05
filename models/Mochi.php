<?php

include_once("models/Producto.php");

class Mochi extends Producto
{
    public function __construct($categoria_id = null, $nombre = null, $descripcion = null, $precio = null, $imagen = null, $activo = null)
    {
        parent::__construct($categoria_id, $nombre, $descripcion, $precio, $imagen, $activo);
    }
}