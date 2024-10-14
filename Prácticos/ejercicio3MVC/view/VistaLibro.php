<?php
class VistaLibro {
    public function mostrarMenu() {
        echo '
        <h1>Gestión de Libros</h1>
        <br>
        <a href="index.php?accion=agregar">
            <button>Agregar Libro</button>
        </a>
        <br>
        <a href="index.php?accion=listar">
            <button>Listar Libros</button>
        </a>';
    }

    public function mostrarLibros($libros) {
        echo "<h1>Lista de Libros</h1>";
        if (empty($libros)) {
            echo "<p>No hay libros registrados.</p>";
        } else {
            echo "<ul>";
            foreach ($libros as $id => $nombre) {
                echo "<li>ID: $id - Nombre: $nombre</li>";
            }
            echo "</ul>";
        }
        echo '<br><a href="index.php"><button>Volver</button></a>';
    }

    public function mostrarFormularioAgregar() {
        echo '
        <h1>Agregar Libro</h1>
        <form method="post" action="index.php?accion=agregar">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <input type="submit" value="Agregar Libro">
        </form>
        <br><a href="index.php"><button>Volver</button></a>
        ';
    }
}
?>
