
<?php
require 'boostrap.php';
try{
    $pdo = new PDO('mysql:dbname=matriculauni;host=127.0.0.1', 'root', '12345678');
    $consulta = $pdo->query("SELECT * FROM alumnos");
}catch (PDOException $e){
    echo $e->getMessage();
}
?>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    #contenedor {
        margin-top: 10px;
    }
    #titulo {
        font-size: 32px;
        text-align: center;
        font-weight: 500;
    }
    #opciones {
        font-size: 18px;
    }
    #opciones {
        display: flex;
        list-style-type: none;
        padding: 0;
        margin: 0;
        justify-content: center;
    }
    #opciones li {
        margin: 0 20px;
    }
    #opciones li a {
        text-decoration: none;
        color: #000;
    }
    #opciones li a:hover {
        border-bottom: 1px solid rgba(133, 57, 49, 0.97);
    }
</style>
<div id="contenedor">
    <h3 id="titulo">Bienvenidos al sistema de matricula de la UNICAH San Isidro</h3>
    <hr>
    <br>
    <ul id="opciones">
        <li><a href="ver-alumnos.php">Ver alumnos registrados</a></li>
        <li><a href="form-registrar-alumno.php">Registrar un nuevo alumno</a></li>
    </ul>
</div>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($consulta as $row): ?>
        <tr>
            <td><?php echo $row['nombre_completo']?></td>
            <td><?php echo $row['correo']?></td>
            <td><a href="imagen/<?php echo $row['imagen']?>">ver foto</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
