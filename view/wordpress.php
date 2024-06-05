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
	    <meta name="description" content="WordPress">
	    <meta name="author" content="Alexgohan">
        <title>WordPress - Network Services</title>

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
            <h1>WordPress</h1>

            <article>
                <h4>Instalar apache</h4>
                <pre class="pre-no-img"><code>sudo apt install apache2</code></pre>
            </article>

            <article>
                <h4>Crear carpeta</h4>
                <pre><code>sudo mkdir /var/www/examen2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Copiar archivo de configuración</h4>
                <pre><code>sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/alumno10-2.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Configurar virtualhost</h4>
                <pre><code>sudo nano /etc/apache2/sites-available/alumno10-2.conf
-----------------------------------------------------------------------------------------
ServerName alumno10-2.redeslitterator.site
ServerAdmin debian@localhost
DocumentRoot /var/www/examen2
ErrorLog ${APACHE_LOG_DIR}/error_alumno10-2.log
CustomLog ${APACHE_LOG_DIR}/access_alumno10-2.log combined
-------------------------------------------------------------------------------------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Habilitar sitio</h4>
                <pre><code>sudo a2ensite alumno10-2.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Reiniciar servicio</h4>
                <pre><code>sudo systemctl restart apache2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/5.png" class="figure-img img-fluid" alt="img">
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
-4º: alumno10-2
-5º: 2 (marcar el 2 para elegir el dominio de la lista que muestra)</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar php</h4>
                <pre><code>sudo apt install php
sudo apt install php-mysql</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar mariadb</h4>
                <pre class="pre-no-img"><code>sudo apt install mariadb-server</code></pre>
            </article>

            <article>
                <h4>Configurar instalación</h4>
                <pre><code>sudo mysql_secure_installation
El comando nos pide información
-clave root: darle enter
-1º: n
-2º: n
-3º: y
-4: y
-5: y
-6: y</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>En mysql, crear el usuario y la base de datos</h4>
                <pre><code>sudo mysql -u root -p
------------
CREATE DATABASE wordpressExamen;

CREATE USER 'wordpress_user'@'localhost' IDENTIFIED BY 'Rodrigo123';

GRANT ALL PRIVILEGES ON wordpressExamen.* TO 'wordpress_user'@'localhost';

FLUSH PRIVILEGES;

EXIT;
------------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Descargar archivo de wordpress</h4>
                <pre><code>sudo wget -P /var/www/examen2 https://wordpress.org/latest.zip</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar zip</h4>
                <pre><code>sudo apt install zip</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/11.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Descomprimir el archivo</h4>
                <pre><code>sudo unzip /var/www/examen2/latest.zip -d /var/www/examen2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/12.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mover los archivos de wordpress a /var/www/examen2</h4>
                <pre><code>sudo mv /var/www/examen2/wordpress/* /var/www/examen2/ </code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/13.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Borrar el archivo comprimido y el directorio wordpress</h4>
                <pre><code>sudo rm -rf /var/www/examen2/latest.zip
sudo rm -rf /var/www/examen2/wordpress</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/14.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar que tenemos los archivos en /var/www/examen2</h4>
                <pre><code>sudo ls /var/www/examen2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/15.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar propietario y grupo a www-data y cambiar permisos</h4>
                <pre><code>sudo chown -R www-data:www-data /var/www/examen2
sudo find /var/www/examen2 -type d -exec chmod 755 {} \;
sudo find /var/www/examen2 -type f -exec chmod 644 {} \;</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej11/16.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Configurar wordpress desde el navegador. Introducir información de la base de datos</h4>
                <ul>
                    <li>Nombre de la base de datos</li>
                    <li>Nombre del usuario de la base de datos</li>
                    <li>Contraseña del usuario de la base datos</li>
                </ul>
                <figure class="figure">
                    <img src="../img/ej/ej11/17.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Introducir información para instalar wordpress</h4>
                <ul>
                    <li>Nombre del virtualhost (título del sitio)</li>
                    <li>Nombre del usuario de la base de datos</li>
                    <li>Contraseña del usuario de la base datos</li>
                    <li>Marcar confirmar contraseña</li>
                    <li>Correo</li>
                </ul>
                <figure class="figure">
                    <img src="../img/ej/ej11/18.png" class="figure-img img-fluid" alt="img">
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
