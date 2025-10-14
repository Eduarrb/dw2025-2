<?php require_once '../resources/config.php'; ?>
<?php include VIEW_LAYOUT . 'head.php'; ?>

    <?php include VIEW_LAYOUT . 'nav.php'; ?>
    
    <header class="header">
        <div class="header__contenedor contenedor">
            <h1 class="header__contenedor--title mb-1">Componentes de PC Premium</h1>
            <p class="header__contenedor--descri">
                Encuentra los mejores componentes para armar la PC de tus sueños. Calidad y rendimiento garantizados.
            </p>
        </div>
    </header>

    <main class="main pb-5">
        <?php include VIEW_INDEX . 'filterBtn.php'; ?>
        
        <div class="main__contenedor contenedor d-flex gap-3 align-start">
            <?php include VIEW_INDEX . 'index.php'; ?>
        </div>
    </main>
    <script src="js/app.js"></script>
</body>
</html>