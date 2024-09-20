<!DOCTYPE html>
<html lang="en">

<head>
    <title>Curriculum vitae</title>
    <link rel="icon" type="image/x-icon" href="cv.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chunk+Five&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            background: linear-gradient(white, #38b6ff, #0f1a8de6);
            display: flex;
            flex-direction: column;
            align-items: center; 
            font-family: 'Roboto', sans-serif; 
        }

        header {
            color: white;
            text-align: center; 
            margin-bottom: 0px; 
            padding: 20px; 
        }

        nav {
            background-color: #2da6fa; 
            padding: 10px 20px; 
            margin-bottom: 20px; 
            border-radius: 5px; 
        }
        nav a {
            text-decoration: none; 
            font-weight: bold; 
            color:white; 
        }

        nav a:hover {
            color: #2d74fa;
        }

        section {
            background-color: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
            width: 80%; 
            max-width: 600px; 
            margin-top: 20px; 
        }

        label, p {
            display: block; 
            margin: 10px 0; 
        }

        .label-color {
            color: #4bc5fe; 
            font-weight: bold;

        }

        
        
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="https://github.com/NayemyMurilloRivera/Formulario-de-CV.git" target="_blank">Directorio a github</a><br>
            <a href="https://nayemymurillorivera.github.io/CV1/" target="_blank">Plantilla de CV</a>
        </nav>
        <br>
        <h1 style="font-family:'Roboto'; color: #105fe2; text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.8);font-size: 2.5em;">Creador de Curriculum Vitae</h1>
    </header>

    <section>
        <form action="formulario.php" method="POST" enctype="multipart/form-data">
            <label class="label-color">
                Nombre y Apellidos:
                <input type="text" name="name" required>
            </label>

            <label class="label-color">
                Ocupación:
                <input type="text" name="ocupacion" required>
            </label>
                
            <label class="label-color">
                Fecha de Nacimiento:
                <input type="date" name="fecha_nacimiento" required>
            </label>

            <p class="label-color">Contacto:</p>
            <label font-weight: bold>
                
                Email:
                
                <input type="text" name="email" required>
            </label>
            <label font-weight: bold;>
                
                Telefono:
                
                <input type="text" name="telefono" required>
            </label>
            <label font-weight: bold;>
                
                Linkedlin:
                
                <input type="text" name="linke" required>
            </label>

            <label class="label-color">
                <p>Nacionalidad:</p>
                <select name="nacionalidad" required>
                    <option value="Peruana">Peruana</option>
                    <option value="Mexicana">Mexicana</option>
                    <option value="Estadounidense">Estadounidense</option>
                    <option value="Canadiense">Canadiense</option>
                    <option value="Española">Española</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Brasileña">Brasileña</option>
                    <option value="Chilena">Chilena</option>
                </select>
            </label>

            <p class="label-color">Ubicacion:</p>
            <label>
                <input type="radio" name="ubicacion" value="Perú" required> Perú
            </label>
            <label>
                <input type="radio" name="ubicacion" value="Chile"> Chile
            </label>
            <label>
                <input type="radio" name="ubicacion" value="Venezuela"> Venezuela
            </label>

            <p class="label-color">Nivel de inglés:</p>
            <label>
                <input type="radio" name="ingles" value="Básico" required> Básico
            </label>
            <label>
                <input type="radio" name="ingles" value="Intermedio"> Intermedio
            </label>
            <label>
                <input type="radio" name="ingles" value="Avanzado"> Avanzado
            </label>
            <label>
                <input type="radio" name="ingles" value="Fluido"> Fluido
            </label>

            <label class="label-color">
                <p>Nivel de español:</p>
                <select name="español" required>
                    <option value="Nativo">Fluido</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Basico">Basico</option>
                </select>
            </label>

            <label class="label-color">
                <p>Nivel de frances:</p>
                <select name="frances" required>
                    <option value="Nativo">Fluido</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Basico">Basico</option>
                </select>
            </label>

            <label class="label-color">
                <p>Lenguajes de programación:</p>
                <select name="lenguajes[]" multiple size="5">
                    <option value="Python">Python</option>
                    <option value="C++">C++</option>
                    <option value="Ruby">Ruby</option>
                    <option value="PHP">Php</option>
                    <option value="Java">Java</option>
                    <option value="Cobol">Cobol</option>
                    <option value="Assembler">Assembler</option>
                    <option value="C">C</option>
                </select>
            </label>

            <label class="label-color" for="aptitudes">Aptitudes:</label>
            <input list="lista" name="aptitudes" id="aptitudes">
            <datalist id="lista">
                <option value="Inteligencia emocional">
                <option value="Trabajo en equipo">
                <option value="Creatividad">
                <option value="Resolución de conflictos">
                <option value="Capacidad analítica">
                <option value="Liderazgo">
                <option value="Gestión del tiempo">
                <option value="Comunicación efectiva">
                <option value="Adaptabilidad">
            </datalist>

            <p class = "label-color">Habilidades:</p>
            <label><input type="checkbox" name="habilidades[]" value="Eficiencia">Eficiencia</label>
            <label><input type="checkbox" name="habilidades[]" value="Empatia">Empatía</label>
            <label><input type="checkbox" name="habilidades[]" value="Negociacion">Negociación</label>
            <label><input type="checkbox" name="habilidades[]" value="Resolucion">Resolución de conflictos</label>
            <label><input type="checkbox" name="habilidades[]" value="Escucha">Escucha activa</label>
            <label><input type="checkbox" name="habilidades[]" value="Creatividad">Creatividad</label>
            <label><input type="checkbox" name="habilidades[]" value="Gestion">Gestión del tiempo</label>
            <label><input type="checkbox" name="habilidades[]" value="Estrategia">Estrategia</label>
            <label><input type="checkbox" name="habilidades[]" value="Adaptabilidad">Adaptabilidad</label>
            <label><input type="checkbox" name="habilidades[]" value="Liderazgo">Liderazgo</label>
            <label><input type="checkbox" name="habilidades[]" value="Equipo">Trabajo en equipo</label>

            <p class = "label-color">OTROS INTERESES:</p>
            <label><input type="checkbox" name="interes[]" value="Voley"> Voley </label>
            <label><input type="checkbox" name="interes[]" value="Programacion competitiva">Programacion competitiva</label>
            <label><input type="checkbox" name="interes[]" value="Ajedrez">Ajedrez</label>
            <label><input type="checkbox" name="interes[]" value="Danza">Danza</label>
            <label><input type="checkbox" name="interes[]" value="Creacion de robots">Creacion de robots</label>

            <label class="label-color">
                <p>Perfil</p>
                <textarea name="perfil"></textarea>
            
            </label>

            <label class="label-color">
                <p>Experiencia:</p>
                <textarea name="experiencia"></textarea>
            
            </label>

            <label class="label-color">
                <p>Formacion:</p>
                <textarea name="formacion"></textarea>
            
            </label>

            <p class="label-color">Foto:</p>
            <label><input type="file" name="imagen"></label>

            <button type="submit">Finalizar</button>
        </form>
    </section>
</body>

</html>
