<?php

if (!empty($_POST)){


    $archivo =  $_FILES['imagen']['name'];
    $ubicacion = $_FILES['imagen']['tmp_name'];
    $nombre = time() .'-'. mt_rand(1, 1000) . '-'.$archivo;
    move_uploaded_file($ubicacion, "imagen/".$nombre);
    print_r($nombre);

    $nombre_completo = $_POST['nombre_completo'] ?? '';
    $correo = $_POST['correo'] ?? '';



    $errores = [];
    if(empty($nombre_completo)){
        $errores[] = "Su nombre Completo debe ser menor a 100 caracteres y no debe estar vacio  ";
    }
    if(empty($correo) || mb_strlen($correo) > 100){
        $errores[] = "El correo no debe estar vacio y debe ser menor a 100 caracteres";
    }
    if (count($errores) === 0){
        try{
            $pdo = new PDO('mysql:dbname=matriculauni;host=127.0.0.1', 'root', '12345678');
            $stmt = $pdo->prepare("INSERT INTO alumnos (nombre_completo, imagen, correo ) VALUES (?, ?, ?)");

            $stmt->bindValue(1,$nombre_completo);
            $stmt->bindValue(2,$nombre);
            $stmt->bindValue(3,$correo);
            $stmt->execute();
            echo 'Guardado Mister';
            echo "<a href='index.html'>volver atras</a>";
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }else{
        for ($i=0; $i<count($errores);$i++){
            echo $errores[$i] . '<br>';

        }
    }

}







?>