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
	    <meta name="keywords" content="servicios, red, rsync">
	    <meta name="description" content="Copia de seguridad rsync">
	    <meta name="author" content="Alexgohan">
        <title>Copia de seguridad rsync - Network Services</title>

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
            <h1>Copia de seguridad rsync</h1>

            <article>
                <h4>Añadir clave privada al agente ssh en local</h4>
                <pre class="pre-no-img"><code>eval $(ssh-agent)
ssh-add </code></pre>
            </article>

            <article>
                <h4>Crear estructura de carpetas</h4>
                <pre><code>mkdir -p fernando_estructura/{dir1,dir2}
touch fernando_estructura/{dir1/{archivo1.txt,archivo2.txt},dir2/{archivo1.txt,archivo2.txt}}
tree fernando_estructura</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej8/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear script</h4>
                <pre><code>nano script-ej8.sh
-----
#!/bin/bash

tar -czvf backup.tar.gz fernando_estructura 

ssh debian@54.37.152.112 "mkdir -p /home/debian/script/fernando_script"

ssh debian@redeslitterator.site "mkdir -p /home/debian/script/fernando_script"

rsync -avhze ssh backup.tar.gz debian@54.37.152.112:/home/debian/script/fernando_script

rsync -avhze ssh backup.tar.gz debian@redeslitterator.site:/home/debian/script/fernando_script

ssh debian@54.37.152.112 "tar -xzvf /home/debian/script/fernando_script/backup.tar.gz -C /home/debian/script/fernando_script/"

ssh debian@redeslitterator.site "tar -xzvf /home/debian/script/fernando_script/backup.tar.gz -C /home/debian/script/fernando_script/"
-----</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej8/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar permisos</h4>
                <pre class="pre-no-img"><code>chmod +x script-ej8.sh</code></pre>
            </article>

            <article>
                <h4>Ejecutar</h4>
                <pre><code>./script-ej8.sh</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej8/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar en el server ovh</h4>
                <pre><code>tree /home/debian/script/fernando_script</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej8/4.png" class="figure-img img-fluid" alt="img">
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
