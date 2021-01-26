<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href='img/game-of-thrones-logo-house-of-stark-sigil-illustration.jpg'>
    <title>PruebaGrid</title>
    <link rel="stylesheet" href="css/estiloss.css">
    <link rel="stylesheet" href="css/Grid.css">
    <script>
        src = "java.js"
    </script>
</head>

<body>
    <section class="principal">
        <header class="header">
            <h1>Gonzalez Ramirez Marwin Jose</h1>
        </header>
        <menu class="menu">
            <li>
                <a onclick="javascipt:return false;" href="" id="BPerfil">Perfil</a>
            </li>
            <li>
                <a onclick="javascipt:return false;" href="" id="BServicios">Paquetes</a>
            </li>
            <li>
                <a onclick="javascipt:return false;" href="" id="BContacto">Contacto</a>
            </li>
        </menu>
        <main class="contenido">
            <section class="perfil" id="perfil">
                <article>
                    <h2>ESTUDIOS REALIZADOS:</h2>
                    <div>
                        <ul>
                            <li>Primaria: Colegio Privado montesano</li>
                            <li>Segundaria: Colegio Privado montesano </li>
                            <li>Diversificado: Colegio San José de Catia la mar</li>
                            <li>Educación Superior: Universidad Marítima del Caribe. Carrera ING Informática</li>
                        </ul>
                    </div>
                </article>
                <article>
                    <h2>TITULO OBTENIDO:</h2>
                    <div>
                        <ul>
                            <li>Bachiller en Ciencias</li>
                            <li>Ingeniero en Seguridad Informática </li>
                        </ul>
                    </div>
                </article>
                <article>
                    <h2>CURSOS REALIZADOS </h2>
                    <div>
                        <ul>
                            <li>Desarrollo web módulo I.(Avalado por google)</li>
                            <li>Desarrollo web módulo II.(Avalado por google)</li>
                            <li>Diseño Digital</li>
                            <li>Photoshop Modulo l</li>
                            <li>Photoshop Modulo ll</li>
                        </ul>
                    </div>
                </article>
            </section>
            <section class="none" id="servicios">
                <h2>Paquetes</h2>
                <article class="ar1">
                    <h3>Paquete 1 </h3>
                    <div>
                        <ul>
                            <li>1 Banner</li>
                            <li>2 imagenes para las redes sociales</li>
                            <li>1 logo</li>
                            <li>costo: 10$</li>
                        </ul>
                    </div>
                    
                </article class="ar2">
                <article>
                    <h3>Paquete 2 </h3>
                    <div>
                        <ul>
                            <li>2 Banner</li>
                            <li>4 imagenes para las redes sociales</li>
                            <li>1 logo</li>
                            <li>costo: 20$</li>
                        </ul>
                    </div>
                </article>
                <article class="ar3">
                    <h3>Paquete 3 </h3>
                    <div>
                        <ul>
                            <li>2 Banner</li>
                            <li>8 imagenes para las redes sociales</li>
                            <li>1 logo</li>
                            <li>costo: 30$</li>
                        </ul>
                    </div>

                   
                </article>
 <form action="index.php" name="formulario" method="POST" class="">
                    <label for="nombre">Paquete</label><input type="text" required name="pa" id="pa" class="pa" placeholder="Escriba aqui">
                    <input type="submit" class="registra" id="registra" name="registra" title="Comprar" value="Comprar">
                    </form>
            </section>

            <section class="none" id="contacto">
                <article class="arti">
                    <h2>CONTACTO</h2>
                    <h3>DIRECCION</h3>
                    <p>Parroquia Carlos Soublette, Sector 10 de Marzo. Edo Vargas.</p>
                    <h3>TELÉFONO:</h3>
                    <p>0426-4039823</p>
                    <h3>CORREO ELECTRÓNICO:</h3>
                    <p>marwingonzalezr@gmail.com</p>
                </article>
            </section>

        </main>

        <aside class="aside">
            <div>
                <img src="img/IMG_20200221_175609.jpg" alt="logo" width="200px">
            </div>
            <section>
                <div>
                    <h2>DATOS PERSONALES</h2>
                </div>
                <div class="datos">
                
                        <li>Cedula de identidad: 27.678.704</li>
                        <li>Estado Civil: Soltero </li>
                        <li>Nacionalidad: venezolano</li>
                        <li>Fecha de nacimiento: 08/10/1999</li>
                        <li>Lugar de Nacimiento: La Guaira Edo. Vargas</li>
                        <li>Edad: 20 Años</li>

                </div>
            </section>
        </aside>
        <footer class="footer">
            <P>Create By: Gonzalez Marwin</P>
            <P>Programacion web</P>
        </footer>
    </section>
    <script src="main.js"></script>
</body>

</html>

<?php 
    include("db.php");
    if (isset($_POST["registra"])) {
        $paquete = trim($_POST["pa"]);
        $consulta = "INSERT INTO pedidos(paquete) VALUES('$paquete')";
        $resultado = mysqli_query($conex,$consulta);
    }
?>
