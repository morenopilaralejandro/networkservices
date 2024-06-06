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
                <h4>Ejemplo</h4>
                <pre class="pre-no-img"><code>grep "text" src
cat src | cut -d " " -f1,2 | grep "text" | sort | uniq | wc</code></pre>
            </article>

            <article>
                <h4>Opciones</h4>
                <ul>
                    <li>-v: reverse.</li>
                    <li>-i: ignore case.</li>
                    <li>-E: extended regular expression.</li>
                    <li>-c: contar lineas.</li>
                    <li>-n: mostrar número de línea.</li>
                </ul>
            </article>

            <article>
                <h4>Otros comandos relacionados</h4>
                <ul>
                    <li>cat: muestra el contenido de un fichero.</li>
                    <li>sort: ordena el resultado por orden alfabético.</li>
                    <li>uniq: solo muestra la líneas únicas(omite líneas duplicadas).</li>
                    <li>wc: contar palabras. Muestra tres números que son el número de líneas, número de palabras y número de bytes.</li>
                </ul>
            </article>

            <article>
                <h4>Expresiones regulares(regex)</h4>
                <ul>
                    <li><a href="https://regex101.com/">Página para comprobar regex.</a></li>
                    <li>Dirección ipv4: \b([0-9]{1,3}\.){3}[0-9]{1,3}\b</li>
                    <li>Teléfono: \b[0-9]{9}\b</li>
                    <li>Email: \b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b</li>
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
