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
	    <meta name="keywords" content="servicios, red">
	    <meta name="description" content="Red">
	    <meta name="author" content="Alexgohan">
        <title>Configurar ftp - Network Services</title>

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
            <h1>Configurar ftp</h1>

            <article>
                <h4>Paso 1: Instalar vsftpd</h4>
                <pre class="pre-no-img"><code>sudo apt install vsftpd</code></pre>
            </article>

            <article>
                <h4>Paso 2: Copiar archivo de configuración</h4>
                <pre class="pre-no-img"><code>sudo cp /etc/vsftpd.conf /etc/vsftpd-backup.conf</code></pre>
            </article>

            <article>
                <h4>Paso 3: Editar archivo de configuración</h4>
                <pre class="pre-no-img"><code>sudo nano /etc/vsftpd.conf

write_enable=YES</code></pre>
            </article>

            <article>
                <h4>Paso 4: Reiniciar el servicio</h4>
                <pre class="pre-no-img"><code>sudo systemctl restart vsftpd.service</code></pre>
            </article>

            <article>
                <h4>Paso 5: Crear usuario del sistema operativo</h4>
                <pre class="pre-no-img"><code>sudo adduser usuario</code></pre>
            </article>

            <article>
                <h4>Paso 6: Añadir el usuario a los grupos</h4>
                <pre class="pre-no-img"><code>sudo usermod -a -G debian usuario
sudo usermod -a -G www-data usuario
sudo usermod -a -G ftp usuario</code></pre>
            </article>

            <article>
                <h4>Paso 7: Probar desde filezilla</h4>
                <p>
                    Conexión rápida con filezilla.
                </p>
            </article>

            <article>
                <h4>Paso 8: Comprobar en el servidor</h4>
                <pre class="pre-no-img"><code>ls -lia /home/usuario</code></pre>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
