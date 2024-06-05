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
        <title>Configurar virtualhost en apache - Network Services</title>

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
            <h1>Configurar virtualhost en apache</h1>

            <article>
                <h4>Paso 1: Instalar apache</h4>
                <pre class="pre-no-img"><code>sudo apt install apache2</code></pre>
            </article>

            <article>
                <h4>Paso 2: Crear carpeta</h4>
                <pre class="pre-no-img"><code>sudo mkdir /var/www/prueba</code></pre>
            </article>

            <article>
                <h4>Paso 3: Copiar archivo de configuración</h4>
                <pre class="pre-no-img"><code>sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/vhost.conf</code></pre>
            </article>

            <article>
                <h4>Paso 4: Configurar virtualhost</h4>
                <pre class="pre-no-img"><code>sudo nano /etc/apache2/sites-available/vhost.conf</code></pre>
                <ul>
                    <li>ServerName dominio</li>
                    <li>ServerAdmin debian@localhost</li>
                    <li>DocumentRoot /var/www/prueba</li>
                    <li>ErrorLog</li>
                    <li>CustomLog</li>
                </ul>
            </article>

            <article>
                <h4>Paso 5: Habilitar sitio</h4>
                <pre class="pre-no-img"><code>sudo a2ensite vhost.conf</code></pre>
            </article>

            <article>
                <h4>Paso 6: Deshabilitar sitio por defecto</h4>
                <pre class="pre-no-img"><code>sudo a2dissite 000-default.conf</code></pre>
            </article>

            <article>
                <h4>Paso 7: Reiniciar servicio</h4>
                <pre class="pre-no-img"><code>sudo systemctl restart apache2</code></pre>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
