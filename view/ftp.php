<?php
    require_once __DIR__ . '/../php/WebComp.php';
    $webComp = new WebComp(false);
    $path = $webComp->getPath();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="keywords" content="servicios, red, clave, plublica, privada, ftp">
	    <meta name="description" content="Ftp">
	    <meta name="author" content="Alexgohan">
        <title>Ftp - Network Services</title>

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
            <h1>Ftp</h1>

            <article>
                <h4>Instalar vsftpd</h4>
                <pre class="pre-no-img"><code>sudo apt install vsftpd</code></pre>
            </article>

            <article>
                <h4>Copia de seguridad del fichero de configuración</h4>
                <pre class="pre-no-img"><code>sudo cp /etc/vsftpd.conf /etc/vsftpd-backup.conf</code></pre>
            </article>

            <article>
                <h4>Editar fichero de configuración</h4>
                <pre><code>sudo nano /etc/vsftpd.conf
----------
write_enable=YES
----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej15/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Reiniciar el servicio</h4>
                <pre class="pre-no-img"><code>sudo systemctl restart vsftpd.service</code></pre>
            </article>

            <article>
                <h4>Crear usuario del sistema operativo</h4>
                <pre><code>sudo adduser examen</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej15/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir el usuario a los grupos</h4>
                <pre><code>sudo usermod -a -G debian examen
sudo usermod -a -G www-data examen
sudo usermod -a -G ftp examen</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej15/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar desde filezilla</h4>
                <figure class="figure">
                    <img src="../img/ej/ej15/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Subir un archivo</h4>
                <figure class="figure">
                    <img src="../img/ej/ej15/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Renombrar</h4>
                <figure class="figure">
                    <img src="../img/ej/ej15/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Borrar</h4>
                <figure class="figure">
                    <img src="../img/ej/ej15/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar permisos</h4>
                <figure class="figure">
                    <img src="../img/ej/ej15/8.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej15/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar desde el servidor</h4>
                <pre><code>ls -lia /home/examen</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej15/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
