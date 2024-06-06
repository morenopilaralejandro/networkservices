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
        <title>Configuración de ssh - Network Services</title>

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
            <h1>Configuración de ssh</h1>

            <article>
                <h4>Instalar ssh</h4>
                <pre class="pre-no-img"><code>sudo apt install ssh</code></pre>
            </article>

            <article>
                <h4>Ejemplo</h4>
                <pre class="pre-no-img"><code>ssh user@host
ssh -i ~/.ssh/id_rsa user@host
ssh -p 22 user@host</code></pre>
            </article>

            <article>
                <h4>Archivo de configuración</h4>
                <pre class="pre-no-img"><code>sudo nano /etc/ssh/sshd_config

Port 22 (cambiar puerto)
PermitRootLogin yes (habilitar usuario root)</code></pre>
            </article>

            <article>
                <h4>Configurar alias</h4>
                <pre class="pre-no-img"><code>sudo nano ~/.ssh/config

Host alias
HostName host
User user
IdentityFile ~/.ssh/id_rsa
</code></pre>
            </article>

            <article>
                <h4>Reiniciar servicios</h4>
                <pre class="pre-no-img"><code>sudo systemctl restart ssh</code></pre>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
