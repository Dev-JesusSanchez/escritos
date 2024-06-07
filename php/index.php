<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://kit.fontawesome.com/6e4e1dfefa.js" crossorigin="anonymous"></script>
    <title>Jesús Sánchez - Escritos</title>
</head>
<body>
    <!-- NAVEGACIÓN -->
    <header class="header">
        <nav class="header__nav">
            <ul class="header__nav__lista">
                <li class="header__nav__lista__item"><a href="#home" class="lista__item__enlace eyelash-active" tabindex="10" aria-label="Página de inicio"><i class="fa-solid fa-house"></i></a></li>
                <li class="header__nav__lista__item"><a href="#write" class="lista__item__enlace" tabindex="20" aria-label="Escritos"><i class="fa-solid fa-pen"></i></a></li>
            </ul>
        </nav>
    </header>
    <!-- CONTENIDO PRINCIPAL -->
    <main class="main">
        <!-- BOTÓN PARA CAMBIAR DE CLARO A OSCURO -->
        <button class="mode" id="mode">Día</button>
        <!-- SECCIONES -->
        <section class="section section-home" id="home">
            <div class="section-home__option">
                <a href="aboutme.php"><i class="fa-solid fa-circle-info"></i></a>
                <p>Acerca de mí</p>
            </div>
            <div class="section-home__option">
                <a href=""><i class="fa-solid fa-book"></i></a>
                <p>Libros</p>
            </div>
            <div class="section-home__option">
            <a href=""><i class="fa-solid fa-calendar-days"></i></a>
                <p>Próximamente</p>
            </div>
            <div class="section-home__option">
            <a href=""><i class="fa-solid fa-square-pen"></i></a>
                <p>Blog</p>
            </div>
            <div class="section-home__option">
            <a href=""><i class="fa-solid fa-quote-left"></i></a>
                <p>Extractos</p>
            </div>
            <div class="section-home__option">
            <a href=""><i class="fa-solid fa-screwdriver-wrench"></i></a>
                <p>Recursos</p>
            </div>
            <div class="section-home__option">
            <a href=""><i class="fa-solid fa-address-book"></i></a>
                <p>Contacto</p>
            </div>
        </section>
        <section class="section section-write" id="write">
        <nav class="nav-writer">
            <ul class="nav-writer__list">
                <li class="nav-writer__list__item"><a href="#cartas" class="nav-writer__list__item__enlace eyelash-active" data-tipo ="cartas">Cartas</a></li>
                <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace" data-tipo ="poemas">Poemas</a></li>
                <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace" data-tipo ="cuentos">Cuentos</a></li>
                <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace" data-tipo ="letras">Letras</a></li>
                <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace" data-tipo ="novelas">Novelas</a></li>
            </ul>
        </nav>
        <div id="cartas" class="nav2-sections">
            <?php 
            
                include 'conect.php';

                $query = "SELECT * FROM cartas";

                $resultado = mysqli_query($conexion, $query);

                if ($resultado) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        $name = $fila['name'];
                        $genero = $fila['genero'];
                        $portada = $fila['portada'];
                        $link = $fila['link'];
                
                        echo "
                        
                        <section>
                            <div class='escritos-contenido'>
                                <img alt='Portada' src='$portada' class='escritos-contenido__portada'>
                                <p class='escritos-contenido__text'>Título: $name</p>
                                <p class='escritos-contenido__text'>Genero: $genero</p>
                                <div class='content_actions'>
                                <a href='$link'><i class='fa-regular fa-eye'></i></a>
                                <a href='$link' dowload><i class='fa-solid fa-download'></i></a></div>
                            </div>
                        </section>
                        
                        ";
                }
                }
                
                mysqli_close($conexion);
            
            ?>
        </div>
        <div id="poemas" class="nav2-sections hidden">
        <?php 
            
            include 'conect.php';

            $query = "SELECT * FROM poemas";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $name = $fila['NAME'];
                    $genero = $fila['GENERO'];
                    $portada = $fila['PORTADA'];
                    $link = $fila['LINK'];
            
                    echo "
                    
                    <section>
                        <div class='escritos-contenido'>
                            <img alt='Portada' src='$portada' class='escritos-contenido__portada'>
                            <p class='escritos-contenido__text'>Título: $name</p>
                            <p class='escritos-contenido__text'>Genero: $genero</p>
                            <div class='content_actions'>
                            <a href='$link'><i class='fa-regular fa-eye'></i></a>
                            <a href='$link' dowload><i class='fa-solid fa-download'></i></a></div>
                        </div>
                    </section>
                    
                    ";
            }
            }
            
            mysqli_close($conexion);
        
        ?>
        </div>
        <div id="cuentos" class="nav2-sections hidden">
        <?php 
            
            include 'conect.php';

            $query = "SELECT * FROM poemas";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $name = $fila['NAME'];
                    $genero = $fila['GENERO'];
                    $portada = $fila['PORTADA'];
                    $link = $fila['LINK'];
            
                    echo "
                    
                    <section>
                        <div class='escritos-contenido'>
                            <img alt='Portada' src='$portada' class='escritos-contenido__portada'>
                            <p class='escritos-contenido__text'>Título: $name</p>
                            <p class='escritos-contenido__text'>Genero: $genero</p>
                            <div class='content_actions'>
                            <a href='$link'><i class='fa-regular fa-eye'></i></a>
                            <a href='$link' dowload><i class='fa-solid fa-download'></i></a></div>
                        </div>
                    </section>
                    
                    ";
            }
            }
            
            mysqli_close($conexion);
        
        ?>
        </div>
        <div id="letras" class="nav2-sections hidden">
        <?php 
            
            include 'conect.php';

            $query = "SELECT * FROM letras";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $name = $fila['name'];
                    $genero = $fila['genero'];
                    $portada = $fila['portada'];
                    $link = $fila['link'];
            
                    echo "
                    
                    <section>
                        <div class='escritos-contenido'>
                            <img alt='Portada' src='$portada' class='escritos-contenido__portada'>
                            <p class='escritos-contenido__text'>Título: $name</p>
                            <p class='escritos-contenido__text'>Genero: $genero</p>
                            <div class='content_actions'>
                            <a href='$link'><i class='fa-regular fa-eye'></i></a>
                            <a href='$link' dowload><i class='fa-solid fa-download'></i></a></div>
                        </div>
                    </section>
                    
                    ";
            }
            }
            
            mysqli_close($conexion);
        
        ?>
        </div>
        <div id="novelas" class="nav2-sections hidden">
        <?php 
            
            include 'conect.php';

            $query = "SELECT * FROM poemas";

            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $name = $fila['NAME'];
                    $genero = $fila['GENERO'];
                    $portada = $fila['PORTADA'];
                    $link = $fila['LINK'];
            
                    echo "
                    
                    <section>
                        <div class='escritos-contenido'>
                            <img alt='Portada' src='$portada' class='escritos-contenido__portada'>
                            <p class='escritos-contenido__text'>Título: $name</p>
                            <p class='escritos-contenido__text'>Genero: $genero</p>
                            <div class='content_actions'>
                            <a href='$link'><i class='fa-regular fa-eye'></i></a>
                            <a href='$link' dowload><i class='fa-solid fa-download'></i></a></div>
                        </div>
                    </section>
                    
                    ";
            }
            }
            
            mysqli_close($conexion);
        
        ?>
        </div>
        </section>
    </main>
    <!-- PIE DE PÁGINA -->
    <footer class="footer">
        <div class="footer__social">
            <a href="" class="footer__social__link"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="" class="footer__social__link"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="footer__social__link"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>
    <script src="../js/index.js"></script>
    <script src="../js/contenido.js"></script>
</body>
</html>