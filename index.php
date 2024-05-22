<?php
    require_once __DIR__ . '/php/WebComp.php';
    $webComp = new WebComp(true);
    $path = $webComp->getPath();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="keywords" content="smr, 24, wuaze, com, configuracion, servicios, red">
	    <meta name="description" content="Configuración de servicios en red (smr24.wuaze.com). Tutoriales y apuntes.">
	    <meta name="author" content="Alexgohan">
        <title>Configuración de servicios en red - Network Services</title>

	    <link rel="apple-touch-icon" sizes="180x180" 
            href="<?=$path?>img/favicon/apple-touch-icon.png">
	    <link rel="icon" type="image/png" sizes="32x32" 
            href="<?=$path?>img/favicon/favicon-32x32.png">
	    <link rel="icon" type="image/png" sizes="16x16" 
            href="<?=$path?>img/favicon/favicon-16x16.png">
	    <link rel="manifest" href="<?=$path?>img/favicon/site.webmanifest">

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
            crossorigin="anonymous">
        <link rel="stylesheet" href="<?=$path?>css/style.css">
    </head>
    <body class="short-page">
        <header>
            <?=$webComp->getHeader()?>
        </header>

        <section>
            <h1>Índice</h1>
            <ul>
                <li>
                    <a href="./view/claves.php">Claves</a>
                </li>
                <li>
                    <a href="./view/kali.php">Apuntes 2</a>
                </li>
                <li>
                    <a href="./view/ssh-puerto.php">Ssh puerto</a>
                </li>
                <li>
                    <a href="./view/ssh-root.php">Ssh root</a>
                </li>
                <li>
                    <a href="./view/scp.php">Scp</a>
                </li>
                <li>
                    <a href="./view/rsync.php">Rsync</a>
                </li>
                <li>
                    <a href="./view/screen.php">Screen</a>
                </li>
                <li>
                    <a href="./view/page1.php">Apuntes 8</a>
                </li>
                <li>
                    <a href="./view/escritorio-remoto.php">Escritorio remoto</a>
                </li>
                <li>
                    <a href="./view/apache.php">Apache</a>
                </li>
                <li>
                    <a href="./view/wordpress.php">WordPress</a>
                </li>
                <li>
                    <a href="./view/page1.php">Apuntes 12</a>
                </li>
                <li>
                    <a href="./view/page1.php">Apuntes 13</a>
                </li>

                <li>
                    <a href="./view/page1.php">Apuntes 14</a>
                </li>
                <li>
                    <a href="./view/page1.php">Apuntes 15</a>
                </li>
            </ul>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
