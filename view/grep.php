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
	    <meta name="keywords" content="servicios, grep">
	    <meta name="description" content="Grep">
	    <meta name="author" content="Alexgohan">
        <title>Grep - Network Services</title>

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
            <h1>Grep</h1>

            <article>
                <h4>Mover archivo adjunto a la terminal local</h4>
                <pre class="pre-no-img"><code>explorer.exe .</code></pre>
            </article>

            <article>
                <h4>Contar el número de registros que ha habido a las 18:20 con ip única</h4>
                <pre><code>grep "18:20" boquepasa-access.log | cut -d " " -f6 | sort | uniq | wc
grep ":18:20:" boquepasa-access.log | cut -d " " -f1 | sort | uniq | wc</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej12/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Buscar todas las ip que no sean v4 del fichero únicas</h4>
                <pre><code>cat boquepasa-access.log | cut -d " " -f6 | sort | uniq | grep -v "4"
cat boquepasa-access.log | cut -d " " -f1 | sort | uniq | grep -vE "\b([0-9]{1,3}\.){3}[0-9]{1,3}\b"</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej12/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Buscar si se ha producido algún error 500 y se ha producido mostrar la url que se ha visitado.</h4>
                <pre><code>cat boquepasa-access.log | cut -d " " -f14,16 | grep "500 "
cat boquepasa-access.log | cut -d " " -f7,9 | grep " 500"</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej12/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mostrar todas las peticiones GET únicas que se han producido entre las 15:30 y 15:31 incluidas</h4>
                <pre><code>cat boquepasa-access.log | grep "GET" | grep "15:30, 15:31" | sort | uniq
cat boquepasa-access.log | grep "GET" | grep -E ':15:30:|:15:31:' | sort | uniq</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej12/4.png" class="figure-img img-fluid" alt="img">
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
