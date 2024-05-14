<?php
    require_once __DIR__ . '/../php/WebComp.php';
    $webComp = new WebComp(false);
    $path = $webComp->getPath();
?>
<!doctype html>
<html lang="es" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="keywords" content="servicios, red">
	    <meta name="description" content="Apuntes sobre SSH">
	    <meta name="author" content="Alexgohan">
        <title>SSH - Network Services</title>

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
            <h1>SSH</h1>

            <article>
                <h2>Conexión</h2>
                <pre><code>ssh user@host
ssh -p 2222 user@host</code></pre>
            </article>

            <article>
                <h2>Configuración</h2>
                <pre><code>sudo nano /etc/ssh/sshd_config
-----------
Port 22
PermitRootLogin yes
-----------</code></pre>
            </article>

            <article>
                <h2>Generar claves</h2>
                <pre><code>ssh-keygen -b 4096</code></pre>
                <p>
                    *id_rsa -&gt; privada<br>
                    *id_rsa.pub -&gt; pública
                </p>
            </article>

            <article>
                <h2>Añadir clave pública al servidor SSH</h2>
                <pre><code>ssh-copy-id user@host</code></pre>
            </article>

        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
