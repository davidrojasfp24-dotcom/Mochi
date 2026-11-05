<?php

include_once("models/MochiDAO.php");
include_once("models/Mochi.php");

class productoController
{
    public function index()
    {
        $productos = MochiDAO::getAll();
        $view = "views/productos/listado.php";
        include_once 'views/main.php';
    }

    public function create()
    {
        $view = "views/productos/create.php";
        include_once 'views/main.php';
    }

    public function store()
    {
        $categoria_id = isset($_POST['categoria_id']) ? trim($_POST['categoria_id']) : '';
        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
        $descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';
        $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
        $imagen = isset($_POST['imagen']) ? trim($_POST['imagen']) : '';
        $activo = isset($_POST['activo']) ? 1 : 0;

        // Validaciones: aseguramos que la categoría sea numérica, nombre no esté vacío y el precio sea válido
        if ($categoria_id === '' || !ctype_digit((string) $categoria_id) || $nombre === '' || !is_numeric($precio) || $precio < 0) {
            header('Location:?controller=producto&action=create');
            exit;
        }
        $producto = new Mochi((int) $categoria_id, $nombre, $descripcion, (float) $precio, $imagen, $activo);
        MochiDAO::store($producto);

        header('Location:?controller=producto');
        exit;
    }

    public function destroy()
    {
        if (!isset($_GET['id']) || !ctype_digit((string) $_GET['id'])) {
            header('Location:?controller=producto');
            exit;
        }

        MochiDAO::destroy((int) $_GET['id']);
        header('Location:?controller=producto');
        exit;
    }

    public function show()
    {
        if (!isset($_GET['id']) || !ctype_digit((string) $_GET['id'])) {
            header('Location:?controller=producto');
            exit;
        }

        $producto = MochiDAO::getById((int) $_GET['id']);
        if ($producto === null) {
            header('Location:?controller=producto');
            exit;
        }

        $view = "views/productos/show.php";
        include_once 'views/main.php';
    }
}