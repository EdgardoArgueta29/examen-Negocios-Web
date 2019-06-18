<?php
require 'boostrap.php';
?>
<html>
<head>
    <title>Formulario para Agregar Alumnos</title>
    <style>
        input:not([type="submit", type="file"]){
            border: 0;
            border-bottom: 1px solid #000;
        }
        input{
            padding: 5px;
            font-size: 16px
        }

        select{
            margin-top: 20px;
            padding: 5px;
            font-size: 16px;
        }
        input:focus{
            border: 0;
        }


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
</head>


<body>
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
<div class="d-flex justify-content-center">


    <form action="guardar.php" method="POST" enctype="multipart/form-data" class="w-50">
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input class="form-control" type="text" maxlength="100" name="nombre_completo" id="nombre_completo">
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input class="form-control" type="text" maxlength="20" name="correo" id="correo">
        </div>
        <div class="form-group">
            <label for="imagen">Foto de Perfil</label>
            <input class="form-control" type="file" name="imagen" id="imagen" accept="image/*" multiple>
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
