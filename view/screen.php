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
	    <meta name="keywords" content="servicios, red, screen">
	    <meta name="description" content="Screen">
	    <meta name="author" content="Alexgohan">
        <title>Screen - Network Services</title>

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
            <h1>Screen</h1>

            <article>
                <h4>Conectarse al server desde local</h4>
                <pre><code>ssh debian@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar screen</h4>
                <pre><code>sudo apt install screen</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear screen y ejecutar bucle</h4>
                <pre><code>screen -S examen
---------
while true;do echo “voy a sacar un 10 en el examen”; sleep 1;done;
---------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Salir del screen(detach)</h4>
                <pre><code>Ctrl-a + d</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Salir del terminal</h4>
                <pre><code>exit</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Volver a conectarse al server</h4>
                <pre><code>ssh debian@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Listar screens</h4>
                <pre><code>screen -ls</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Volver a ese screen(reattach)</h4>
                <pre><code>screen -r examen</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej7/8.png" class="figure-img img-fluid" alt="img">
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
