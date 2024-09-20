<?php
if (isset($_REQUEST['name']) && isset($_REQUEST['ocupacion']) && isset($_REQUEST['email']) &&
    isset($_REQUEST['ingles']) && isset($_REQUEST['habilidades']) && isset($_FILES['imagen'])&&
    isset($_POST['fecha_nacimiento']) && isset($_POST['nacionalidad'])  && isset($_REQUEST['lenguajes']) &&
    isset($_REQUEST['perfil'] )&& isset($_REQUEST['aptitudes']) && isset($_REQUEST['español'] ) && isset($_REQUEST['ingles'])
    && isset($_REQUEST['frances'])&& isset($_REQUEST['ubicacion'])&& isset($_REQUEST['linke'])&& isset($_REQUEST['formacion'])
    && isset($_REQUEST['experiencia'])) {
    
    $nombre = $_REQUEST['name'];
    $ocupacion = $_REQUEST['ocupacion'];
    $email = $_REQUEST['email'];
    $telefono = $_REQUEST['telefono'];
    $ingles = $_REQUEST['ingles'];
    $habilidades = $_REQUEST['habilidades'];
    $imagen = $_FILES['imagen'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/PHP/imagenes/';
    $fecha_nacimiento= $_POST['fecha_nacimiento'] ;
    $nacionalidad = $_POST['nacionalidad'];
    $lenguajes = $_POST['lenguajes'];
    $perfil = $_POST['perfil'];
    $aptitudes = $_POST['aptitudes'];
    $interes = $_POST['interes']; 
    $español = $_POST['español']; 
    $frances = $_POST['frances']; 
    $ubicacion = $_REQUEST['ubicacion']; 
    $linke = $_REQUEST['linke']; 
    $formacion= $_REQUEST['formacion'];
    $experiencia = $_REQUEST['experiencia']; 
 

    if (!file_exists($target_dir)) {
         mkdir($target_dir, 0777, true); 
    }
    $patch = $target_dir . basename($imagen['name']);

    if (move_uploaded_file($imagen['tmp_name'], $patch)) {
        $image_url = '/PHP/imagenes/' . basename($imagen['name']);
    } else {
        echo "Error al subir la imagen.";
        exit();
    }

} else {
    echo "Faltan datos. Por favor, complete el formulario.";
    exit();
}

if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
    echo "Ingrese un nombre válido.";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Ingrese un correo electrónico válido.";
    exit();
}

if (!filter_var($telefono, FILTER_VALIDATE_INT)){
    echo "Ingrese un numero valido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Creador de CV</title>
    <link rel="icon" type="image/x-icon" href="cv.png">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .circular-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 20px;
            margin-top: 10px;
        }

        .imagencaracter {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
            margin: 0;
        }

        h1 {
            position: relative;
            padding-bottom: 10px;
            font-size: 1.5em;
        }

        li {
            margin-bottom: 15px;
        }

        h1::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        header {
            display: flex;
            background-color: #585858;
            color: white;
            justify-content: space-between;
            align-items: center;
            padding: 55px;
            width: 100%;
            box-sizing: border-box;
        }

        .left-section {
            width: 30%;
            text-align: center;
        }

        .right-section {
            width: 70%;
            text-align: left;
            padding-left: 20px;
            font-size: 2.4em;
            text-align: center;
        }

        section {
            display: flex;
        }

        nav {
            width: 30%;
            background: hsl(0, 2%, 90%);
            padding: 55px;
            font-size: 1.5em;
            min-height: 100vh;
        }

        article {
            width: 70%;
            padding: 55px;
            background-color: #f1f1f1;
            font-size: 1.5em;
        }

        @media (max-width: 600px) {

            nav,
            article,
            .left-section,
            .right-section {
                width: 100%;
                float: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="left-section">
            <img src="<?php echo htmlspecialchars($image_url); ?>" class="circular-image" alt="Foto de perfil">
        </div>
        <div class="right-section">
            <h2 style="font-family: Arial, sans-serif; font-weight: 10;"><?php echo htmlspecialchars($nombre); ?></h2>
            <h4 style="color: rgb(180, 180, 180); font-family: Arial, sans-serif; font-weight: 300;"><?php echo htmlspecialchars($ocupacion); ?></h4>
        </div>
    </header>

    <section style="color:rgb(0, 0, 0);">
        <nav>
            <h1>CONTACTO</h1>

            <p><img src="telefono-sonando.png" class="imagencaracter" alt="Teléfono"> <?php echo htmlspecialchars($telefono); ?></p>
            <p><img src="correo.png" class="imagencaracter" alt="Correo"><?php echo htmlspecialchars($email); ?></p>
            <p><img src="pasador-de-ubicacion.png" class="imagencaracter" alt="Ubicación"> <?php echo htmlspecialchars($ubicacion);  ?></p>
            <p><img src="logotipo-de-linkedin.png" class="imagencaracter" alt="LinkedIn"><?php echo htmlspecialchars($linke); ?></p>

            <h1>DETALLES</h1>
            <p>Fecha de nacimiento:<?php echo htmlspecialchars($fecha_nacimiento); ?></p>
            <p>Nacionalidad:<?php echo htmlspecialchars($nacionalidad); ?></p>


            <h1>IDIOMAS</h1>
            <p>Español:<?php echo htmlspecialchars($español); ?></p>
            <p>Inglés:<?php echo htmlspecialchars($ingles); ?></p>
            <p>Francés:<?php echo htmlspecialchars($frances); ?></p>

            <h1>PROGRAMACION</h1>
            <?php
                if (isset($_POST['lenguajes'])) {
                    $lenguajes = $_POST['lenguajes']; 
                } else {
                    $lenguajes = []; 
                }
                foreach ($lenguajes as $lenguaje) {
                    echo htmlspecialchars($lenguaje) . "<br>"; // Muestra cada lenguaje seleccionado
                }
            ?>
            <h1>APTITUDES</h1>

            <?php 
                if (isset($_POST['aptitudes'])) {
                    $aptitud = $_POST['aptitudes']; 
                    echo htmlspecialchars($aptitud);
                } else {
                    echo "No se han ingresado aptitudes.";
                }
            
            ?>

            <h1>HABILIDADES</h1>
            <?php 
            if (!empty($habilidades)) {
                echo "<ul>";
                foreach ($habilidades as $habilidad) {
                    echo "<li>" . htmlspecialchars($habilidad) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No se han seleccionado habilidades.</p>";
            }
            ?>
            <h1>OTROS INTERESES</h1>
            <?php 
            if (!empty($interes)) {
                echo "<ul>";
                foreach ($interes as $inti) {
                    echo "<li>" . htmlspecialchars($inti) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No se han seleccionado intereses.</p>";
            }
            ?>
        </nav>

        <article style="color:rgb(0, 0, 0);">
            <h1>PERFIL</h1>
            <p><?php echo htmlspecialchars($perfil); ?></p>

            <h1>EXPERIENCIA LABORAL</h1>

            <li><?php echo htmlspecialchars($experiencia); ?></li>
            
            <h1>FORMACIÓN</h1>
            <li><?php echo htmlspecialchars($formacion); ?></li>
            
        </article>
    </section>
</body>

</html>