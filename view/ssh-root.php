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
	    <meta name="description" content="Apuntes sobre SSH">
	    <meta name="author" content="Alexgohan">
        <title>Ssh root - Network Services</title>

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
            <h1>Ssh root</h1>

            <article>
                <h4>Permitir root</h4>
                <pre><code>sudo nano /etc/ssh/sshd_config
---------
PermitRootLogin yes
---------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej4/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Reiniciar servicio</h4>
                <pre><code>sudo systemctl restart ssh</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej4/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar a acceder con root desde local al servidor</h4>
                <pre><code>ssh root@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej4/3.png" class="figure-img img-fluid" alt="img">
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
