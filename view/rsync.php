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
	    <meta name="keywords" content="servicios, red, Rsync">
	    <meta name="description" content="Apuntes sobre Rsync">
	    <meta name="author" content="Alexgohan">
        <title>Rsync - Network Services</title>

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
            <h1>Rsync</h1>

            <article>
                <h4>Crear directorios en local</h4>
                <pre><code>mkdir -p fernando_sincro/{dir1,dir2,dir3,dir4,dir5}
touch fernando_sincro/dir1/{a1.txt,a2.txt,a3.txt,a4.txt,a5.txt}
touch fernando_sincro/dir2/{a1.txt,a2.txt,a3.txt,a4.txt,a5.txt}
touch fernando_sincro/dir3/{a1.txt,a2.txt,a3.txt,a4.txt,a5.txt}
touch fernando_sincro/dir4/{a1.txt,a2.txt,a3.txt,a4.txt,a5.txt}
touch fernando_sincro/dir5/{a1.txt,a2.txt,a3.txt,a4.txt,a5.txt}
tree</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/1.png" class="figure-img img-fluid" alt="img">
                </figure>

                <figure class="figure">
                    <img src="../img/ej/ej6/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar rsync en local</h4>
                <pre class="pre-no-img"><code>sudo apt install rsync</code></pre>
            </article>

            <article>
                <h4>Instalar rsync en el servidor</h4>
                <pre class="pre-no-img"><code>sudo apt install rsync</code></pre>
            </article>

            <article>
                <h4>Sincronizar con ovh (prueba)</h4>
                <pre><code>rsync -avhe ssh --dry-run fernando_sincro debian@54.37.152.112:/home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Sincronizar con ovh (ejecución)</h4>
                <pre><code>rsync -avhe ssh fernando_sincro debian@54.37.152.112:/home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar en ovh</h4>
                <pre><code>tree /home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Borrar dir4 en local </h4>
                <pre><code>rm -rf fernando_sincro/dir4
tree</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Sincronizar para que se borre en ovh</h4>
                <pre><code>rsync -avhe ssh --delete fernando_sincro debian@54.37.152.112:/home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar en ovh</h4>
                <pre><code>tree /home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear nuevos directorios dir6 y dir7</h4>
                <pre><code>mkdir -p fernando_sincro/{dir6,dir7}
tree</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Sincronizar excluyendo el dir6</h4>
                <pre><code>rsync -avhe ssh --exclude fernando_sincro/dir6 fernando_sincro debian@54.37.152.112:/home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar en ovh</h4>
                <pre><code>tree /home/debian/sincronizacion</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej6/11.png" class="figure-img img-fluid" alt="img">
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
