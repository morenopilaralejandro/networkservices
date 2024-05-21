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
	    <meta name="description" content="">
	    <meta name="author" content="Alexgohan">
        <title>Apache - Network Services</title>

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
            <h1>Apache</h1>

            <article>
                <h4>Instalar apache</h4>
                <pre><code>sudo apt install apache2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear carpetas para la página web</h4>
                <pre><code>sudo mkdir /var/www/examen1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear index.html</h4>
                <pre><code>sudo nano /var/www/examen1/index.html
-------------------------------
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Examen&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Hola Mundo
    &lt;/body&gt;
&lt;/html&gt;
-------------------------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Copiar archivo de configuración</h4>
                <pre><code>sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/alumno10.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Configurar virtualhost</h4>
                <pre><code>sudo nano /etc/apache2/sites-available/alumno10.conf
-------------------------------
ServerName alumno10.redeslitterator.site
ServerAdmin debian@localhost
DocumentRoot /var/www/examen1
ErrorLog ${APACHE_LOG_DIR}/error_alumno10.log
CustomLog ${APACHE_LOG_DIR}/access_alumno10.log combined
---------------------------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/5.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej10/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Deshabilitar sitio por defecto</h4>
                <pre><code>cd /etc/apache2/sites-available
sudo a2dissite 000-default.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/7.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej10/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Habilitar sitio</h4>
                <pre><code>cd /etc/apache2/sites-available
sudo a2ensite alumno10.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Reiniciar servicio</h4>
                <pre><code>cd /home/debian
sudo systemctl restart apache2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar certbot</h4>
                <pre class="pre-no-img"><code>sudo apt install certbot
sudo apt install libapache2-mod-python
sudo apt install certbot python3-certbot-apache</code></pre>
            </article>

            <article>
                <h4>Crear certificado</h4>
                <pre><code>sudo certbot
El comando nos pide información 
-1º: escribir correo de gmail
-2º: yes
-3º: no
-4º: alumno10
-5º: 1 (marcar el 1 para elegir el dominio de la lista que muestra)</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/11.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar web en el navegador</h4>
                <pre class="pre-no-img"><code>alumno10.redeslitterator.site</code></pre>
            </article>

            <article>
                <h4>Cambiar propietario y grupo a www-data y cambiar permisos</h4>
                <pre><code>sudo chown -R www-data:www-data /var/www/examen1
sudo find /var/www/examen1 -type d -exec chmod 755 {} \;
sudo find /var/www/examen1 -type f -exec chmod 644 {} \;</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/12.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar permisos</h4>
                <pre><code>ls -lia /var/www/examen1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/13.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Para que el usuario www-data pueda acceder por ssh, cambiar contraseña del usuario</h4>
                <pre><code>sudo passwd www-data</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/14.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Asignar shell al usuario</h4>
                <pre><code>sudo nano /etc/passwd
---------------------------------
editar la línea de www-data
/bin/bash
---------------------------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/15.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar acceso ssh desde local</h4>
                <pre><code>ssh www-data@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej10/16.png" class="figure-img img-fluid" alt="img">
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
