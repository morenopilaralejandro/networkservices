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
    <body>
        <header>
            <?=$webComp->getHeader()?>
        </header>

        <section>
            <h2>Teoría</h2>   
            <article>
                <h5>Comandos</h5>
                <ul>
                    <li>
                        <a href="./view/t-directorios.php">Creación de árbol de directorios</a>
                    </li>
                    <li>
                        <a href="./view/t-scp.php">Scp</a>
                    </li>
                    <li>
                        <a href="./view/t-rsync.php">Rsync</a>
                    </li>
                    <li>
                        <a href="./view/t-screen.php">Screen</a>
                    </li>
                    <li>
                        <a href="./view/t-grep.php">Grep</a>
                    </li>
                    <li>
                        <a href="./view/t-tar.php">Tar</a>
                    </li>
                <ul>
            </article>
            <article>
                <h5>Ssh</h5>
                <ul>
                    <li>
                        <a href="./view/t-ssh-conf.php">Configuración de ssh</a>
                    </li>
                    <li>
                        <a href="./view/t-ssh-key.php">Creación de clave pública y privada</a>
                    </li>
                <ul>
            </article>
            <article>
                <h5>Apache</h5>
                <ul>
                    <li>
                        <a href="./view/t-virtualhost.php">Configurar virtualhost en apache</a>
                    </li>
                    <li>
                        <a href="./view/t-certbot.php">Creación de certificados ssl con certbot</a>
                    </li>
                    <li>
                        <a href="./view/t-wdata.php">Habilitar usuario www-data</a>
                    </li> 
                    <li>
                        <a href="./view/t-wordpress.php">Instalar y configurar wordpress</a>
                    </li> 
                </ul>
            </article>
            <article>
                <h5>Otros servicios</h5>
                <ul>
                    <li>
                        <a href="./view/t-ftp.php">Ftp</a>
                    </li>
                    <li>
                        <a href="./view/t-git.php">Control de versiones</a>
                    </li>
                </ul>
            </article>
        </section>        
    
        <section style="display: none;">
            <h2>Ejercícios</h2>
            <ul>
                <li>
                    <a href="./view/claves.php">Ej1 Claves</a>
                </li>
                <li>
                    <a href="./view/kali.php">Ej2 MV</a>
                </li>
                <li>
                    <a href="./view/ssh-puerto.php">Ej3 Ssh</a>
                </li>
                <li>
                    <a href="./view/ssh-root.php">Ej4 Ssh</a>
                </li>
                <li>
                    <a href="./view/scp.php">Ej5 Scp</a>
                </li>
                <li>
                    <a href="./view/rsync.php">Ej6 Rsync</a>
                </li>
                <li>
                    <a href="./view/screen.php">Ej7 Screen</a>
                </li>
                <li>
                    <a href="./view/copia-seg-rsync.php">Ej8 Copia de seguridad</a>
                </li>
                <li>
                    <a href="./view/escritorio-remoto.php">Ej9 Escritorio remoto</a>
                </li>
                <li>
                    <a href="./view/apache.php">Ej10 Apache</a>
                </li>
                <li>
                    <a href="./view/wordpress.php">Ej11 WordPress</a>
                </li>
                <li>
                    <a href="./view/grep.php">Ej12 Grep</a>
                </li>
                <li>
                    <a href="./view/copia-seg-wordpress.php">Ej13 Copia de seguridad</a>
                </li>
                <li>
                    <a href="./view/git.php">Ej14 Git</a>
                </li>
                <li>
                    <a href="./view/ftp.php">Ej15 Ftp</a>
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
