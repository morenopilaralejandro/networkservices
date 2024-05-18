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
        <title>Claves - Network Services</title>

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
            <h1>Claves</h1>

            <article>
                <h4>Instalar ssh</h4>
                <pre><code>sudo apt install ssh</code></pre>
            </article>

            <article>
                <h4>Crear una llave pública y privada en local (escribir passphrase que es la contraseña de la clave privada)</h4>
                <pre><code>ssh-keygen -b 4096</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/1.png" class="figure-img img-fluid rounded" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir la clave pública el server ovh</h4>
                <pre><code>ssh-copy-id debian@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/2.png" class="figure-img img-fluid rounded" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir un alias del servidor en tu config</h4>
                <pre><code>sudo nano ~/.ssh/config
---------
Host ovh
HostName 54.37.152.112
User debian
IdentityFile ~/.ssh/id_rsa
---------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/3.png" class="figure-img img-fluid rounded" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir clave privada al agente ssh en local</h4>
                <pre><code>eval $(ssh-agent)
ssh-add</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/4.png" class="figure-img img-fluid rounded" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar a acceder por ssh con el alias y usando la clave</h4>
                <pre><code>ssh ovh</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/5.png" class="figure-img img-fluid rounded" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mandar la clave pública</h4>
                <pre><code>explorer.exe .ssh</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej1/6.png" class="figure-img img-fluid rounded" alt="img">
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
