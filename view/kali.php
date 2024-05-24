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
	    <meta name="keywords" content="servicios, red, kali">
	    <meta name="description" content="Kali">
	    <meta name="author" content="Alexgohan">
        <title>Kali - Network Services</title>

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
                <h4>Añadir adaptador puente en la máquina virtual</h4>
                <figure class="figure">
                    <img src="../img/ej/ej2/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Ver ip de kali</h4>
                <pre><code>sudo ifconfig -a</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/2.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Instalar ssh en kali</h4>
                <pre  class="pre-no-img"><code>sudo apt install openssh-client
sudo apt install openssh-server</code></pre>
            </article>

            <article>
                <h4>Iniciar servicio en kali</h4>
                <pre><code>sudo service ssh start</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Conectarse desde local a kali</h4>
                <pre><code>ssh kali@192.168.1.133</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/4.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear la clave pública y privada en kali (nombre kali)</h4>
                <pre><code>ssh-keygen -b 4096
-----------
/home/kali/.ssh/kali
-----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Copiar clave pública de kali a ovh</h4>
                <pre><code>ssh-copy-id -i ~/.ssh/kali.pub debian@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir clave privada al agente ssh en kali</h4>
                <pre><code>eval $(ssh-agent)
ssh-add ~/.ssh/kali</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Conectarse de kali a ovh</h4>
                <pre><code>ssh debian@54.37.152.112</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>


            <article>
                <h4>Crear la clave pública y privada en ovh</h4>
                <pre><code>ssh-keygen -b 4096
-----------
/home/debian/.ssh/ovh
-----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mandar por chat la clave pública de ovh</h4>
                <pre><code>cat ~/.ssh/ovh.pub</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir clave privada al agente ssh en ovh</h4>
                <pre><code>eval $(ssh-agent)
ssh-add ~/.ssh/ovh</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej2/11.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Conectarse de ovh a server profesor</h4>
                <pre class="pre-no-img">ssh debian@redeslitterator.site<code></code></pre>
            </article>
        </section>

        <footer><?=$webComp->getFooter()?></footer>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
    </body>
</html>
