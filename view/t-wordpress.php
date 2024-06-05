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
        <title>Instalar y configurar wordpress - Network Services</title>

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
            <h1>Instalar y configurar wordpress</h1>

            <article>
                <h4>Paso 1: Instalar programas necesarios</h4>
                <pre class="pre-no-img"><code>sudo apt install apache2 -y
sudo apt install php -y
sudo apt install php-mysql -y
sudo apt install mariadb-server -y
sudo apt install zip -y</code></pre>
            </article>

            <article>
                <h4>Paso 2: Crear virtualhost</h4>
                <p>
                    Ver teoría sobre <a href="t-virtualhost.php">virtualhost</a>.
                </p>
            </article>

            <article>
                <h4>Paso 3: Instalar certificado ssl</h4>
                <p>
                    Ver teoría sobre <a href="t-certbot.php">certbot</a>.
                </p>
            </article>

            <article>
                <h4>Paso 4: Configurar mysql</h4>
                <pre class="pre-no-img"><code>sudo mysql_secure_installation</code></pre>
                <ul>
                    <li>clave root (enter)</li>
                    <li>n</li>
                    <li>n</li>
                    <li>y</li>
                    <li>y</li>
                    <li>y</li>
                    <li>y</li>
                </ul>
            </article>

            <article>
                <h4>Paso 5: Crear base de datos y usuario</h4>
                <pre class="pre-no-img"><code>sudo mysql -u root -p

CREATE DATABASE nombredb;
CREATE USER 'nombreuser'@'localhost' IDENTIFIED BY 'contraseña';
GRANT ALL PRIVILEGES ON nombredb.* TO nombreuser@'localhost';
FLUSH PRIVILEGES;
EXIT;</code></pre>
            </article>

            <article>
                <h4>Paso 6: Descargar wordpress</h4>
                <pre class="pre-no-img"><code>sudo wget -P /var/www/prueba https://wordpress.org/latest.zip
sudo unzip /var/www/prueba/latest.zip -d /var/www/prueba
sudo mv /var/www/prueba/wordpress/* /var/www/prueba/
sudo rm -rf /var/www/prueba/latest.zip
sudo rm -rf /var/www/prueba/wordpress
sudo ls /var/www/prueba</code></pre>
            </article>

            <article>
                <h4>Paso 7: Cambiar permisos</h4>
                <pre class="pre-no-img"><code>sudo chown -R www-data:www-data /var/www/prueba
sudo find /var/www/prueba -type d -exec chmod 755 {} \;
sudo find /var/www/prueba -type f -exec chmod 644 {} \;</code></pre>
            </article>

            <article>
                <h4>Paso 8: Configurar wordpress desde el navegador</h4>
                <p>Primera pantalla (configuración base de datos)</p>
                <ul>
                    <li>nombre de la base de datos</li>
                    <li>nombre del usuario de la base de datos</li>
                    <li>contraseña del usuario de la base datos</li>
                </ul>
                <p>Segunda pantalla (configuración general)</p>
                <ul>
                    <li>nombre del virtualhost (título del sitio)</li>
                    <li>nombre del usuario de la base de datos</li>
                    <li>contraseña del usuario de la base datos</li>
                    <li>marcar confirmar contraseña</li>
                    <li>correo</li>
                </ul>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
