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
        <title>Creación de árbol de directorios - Network Services</title>

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
    <body class="short-page">
        <header>
            <?=$webComp->getHeader()?>
        </header>

        <section>
            <h1>Creación de árbol de directorios</h1>

            <article>
                <h4>Creación de directorios y subdirectorios</h4>
                <pre class="pre-no-img"><code>mkdir -p prueba/{dir1,dir2,dir3}</code></pre>
                <p>
El comando mkdir con la opción -p permite crear subdirectorios. (No hay que dejar espacios en blanco).
                </p>
            </article>

            <article>
                <h4>Creación de ficheros</h4>
                <pre class="pre-no-img"><code>touch prueba/{dir1/{a1.txt,a2.txt},dir2/{a1.txt,a2.txt},dir3/{a1.txt,a2.txt}}</code></pre>
                <p>
El comando touch permite crear nuevos ficheros en directorios y subdirectorios sin indicar ninguna opción. (No hay que dejar espacios en blanco).
                </p>
            </article>

            <article>
                <h4>Instalar programa tree</h4>
                <pre class="pre-no-img"><code>sudo apt install tree</code></pre>
            </article>

            <article>
                <h4>Comprobar árbol de directorios</h4>
                <pre class="pre-no-img"><code>tree prueba</code></pre>
            </article>     

            <article>
                <h4>Borrar directorios</h4>
                <pre class="pre-no-img"><code>sudo rm -rf prueba</code></pre>
            </article>     
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
