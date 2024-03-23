<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6e4e1dfefa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
    <title>Jesús Sánchez - Escritos</title>
</head>
<body>
    <!-- NAVEGACIÓN -->
    <header class="header">
        <nav class="header__nav">
            <ul class="header__nav__lista">
                <li class="header__nav__lista__item"><a href="#home" class="lista__item__enlace eyelash-active" tabindex="10" aria-label="Página de inicio"><i class="fa-solid fa-house"></i></a></li>
                <li class="header__nav__lista__item"><a href="#write" class="lista__item__enlace" tabindex="20" aria-label="Escritos"><i class="fa-solid fa-pen"></i></a></li>
                <li class="header__nav__lista__item"><a href="#favorites" class="lista__item__enlace" tabindex="30" aria-label="favoritos"><i class="fa-solid fa-heart"></i></a></li>
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
                <a href=""><i class="fa-solid fa-circle-info"></i></a>
                <p>Acera de mí</p>
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
                <button class="nav-writer__search"><i class="fa-solid fa-magnifying-glass"></i></button>
                <ul class="nav-writer__list">
                    <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace eyelash-active">Cartas</a></li>
                    <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace">Poemas</a></li>
                    <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace">Cuentos</a></li>
                    <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace">Letras</a></li>
                    <li class="nav-writer__list__item"><a href="" class="nav-writer__list__item__enlace">Novelas</a></li>
                </ul>
                <button class="nav-writer__filter"><i class="fa-solid fa-filter"></i></button>
            </nav>
        </section>
        <section class="section section-fav" id="favorites">
            <h2>Favoritos</h2>
        </section>
    </main>
    <!-- PIE DE PÁGINA -->
    <footer class="footer">
        <div class="footer__social">
            <a href="" class="footer__social__link"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="" class="footer__social__link"><i class="fa-brands fa-facebook"></i></a>
            <a href="" class="footer__social__link"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button class="footer__msg"><i class="fa-solid fa-message"></i></button>
    </footer>
    <script src="../js/index.js"></script>
</body>
</html>