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
	    <meta name="keywords" content="servicios, red, wordpress">
	    <meta name="description" content="Copia de seguridad WordPress">
	    <meta name="author" content="Alexgohan">
        <title>Copia de seguridad WordPress - Network Services</title>

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
            <h1>Copia de seguridad WordPress</h1>

            <article>
                <h4>Añadir clave privada al agente ssh en local</h4>
                <pre class="pre-no-img"><code>eval $(ssh-agent)
ssh-add </code></pre>
            </article>

            <article>
                <h4>Crear script en local</h4>
                <pre><code>sudo nano script-ej13.sh
----------
#!/bin/bash
ssh debian@54.37.152.112 tar -zcvf /home/debian/wpbackup.tar.gz /var/www/examen2/*

ssh debian@54.37.152.112 "sudo mysqldump -u root -p wordpressExamen > /home/debian/dbbackup.sql"

scp debian@54.37.152.112:/home/debian/wpbackup.tar.gz .

scp debian@54.37.152.112:/home/debian/dbbackup.sql .
----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar permisos</h4>
                <pre class="pre-no-img"><code>chmod +x script-ej13.sh</code></pre>
            </article>

            <article>
                <h4>Ejecutar</h4>
                <pre><code>./script-ej13.sh
-----------
contraseña de la base de datos root hay que pulsar enter
-----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar que se ha copiado a local</h4>
                <pre><code>ls</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Restaurar la copia de seguridad en el servidor <br> Borrar contenido de  /var/www/examen1</h4>
                <pre class="pre-no-img"><code>sudo rm -rf /var/www/examen1/*</code></pre>
            </article>

            <article>
                <h4>Usar la copia de seguridad de wordpress en el otro dominio</h4>
                <pre><code>sudo tar -xvf wpbackup.tar.gz -C /var/www/examen1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mover archivos</h4>
                <pre class="pre-no-img"><code>sudo mv /var/www/examen1/var/www/examen2/* /var/www/examen1</code></pre>
            </article>

            <article>
                <h4>Comprobar</h4>
                <pre><code>ls /var/www/examen1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear nueva base de datos</h4>
                <pre><code>sudo mysql -u root -p
-------------
CREATE DATABASE wordpressExamen_back;
EXIT;
-------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Usar la copia de seguridad de mysql en la nueva base de datos</h4>
                <pre><code>sudo mysql -u root -p wordpressExamen_back < dbbackup.sql</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar base de datos</h4>
                <pre><code>sudo mysql -u root -p
-------------
SHOW DATABASES;
EXIT;
-------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej13/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar propietario y grupo a www-data y cambiar permisos</h4>
                <pre class="pre-no-img"><code>sudo chown -R www-data:www-data /var/www/examen1
sudo find /var/www/examen1 -type d -exec chmod 755 {} \;
sudo find /var/www/examen1 -type f -exec chmod 644 {} \;</code></pre>
            </article>

            <article>
                <h4>Comprobar desde el navegador (con ventana de incognito)</h4>
                <figure class="figure">
                    <img src="../img/ej/ej13/9.png" class="figure-img img-fluid" alt="img">
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
