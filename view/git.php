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
	    <meta name="description" content="Git">
	    <meta name="author" content="Alexgohan">
        <title>Git - Network Services</title>

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
            <h1>Git</h1>

            <article>
                <h4>Instalar ssh</h4>
                <pre class="pre-no-img"><code>sudo apt install ssh</code></pre>
            </article>

            <article>
                <h4>Habilitar usuario www-data</h4>
                <p><a href="apache.php#wdata">Ver ejercicio apache</a></p>
            </article>

            <article>
                <h4>Cambiar a usuario www-data</h4>
                <pre class="pre-no-img"><code>su www-data</code></pre>
            </article>

            <article>
                <h4>Generar clave en el servidor con el usuario www-data</h4>
                <pre><code>ssh-keygen -b 4096</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/1.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Agregar la clave pública en gitlab</h4>
                <pre><code>Panel lateral, ssh keys</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/2.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/3.png" class="figure-img img-fluid" alt="img">
                </figure>   
            </article>

            <article>
                <h4>Abrir el archivo .pub y copiar el contenido</h4>
                <pre><code>cat ~/.ssh/id_rsa.pub</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/4.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/5.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar que podemos conectarnos</h4>
                <pre><code>ssh -T git@gitlab.com</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/6.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear proyecto/repositorio en gitlab</h4>
                <figure class="figure">
                    <img src="../img/ej/ej14/7.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/8.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar a usuario debian</h4>
                <pre class="pre-no-img"><code>su debian</code></pre>
            </article>

            <article>
                <h4>Instalar apache</h4>
                <pre class="pre-no-img"><code>sudo apt install apache2</code></pre>
            </article>

            <article>
                <h4>Crear virtualhost preproducción</h4>
                <pre><code>sudo mkdir /var/www/preproduccion

sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/preproduccion.conf

sudo nano /etc/apache2/sites-available/preproduccion.conf
------
ServerName alumno10-2.redeslitterator.site
ServerAdmin debian@localhost
DocumentRoot /var/www/preproduccion
ErrorLog ${APACHE_LOG_DIR}/error_preproduccion.log
CustomLog ${APACHE_LOG_DIR}/access_preproduccion.log combined
------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/9.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear virtualhost producción </h4>
                <pre><code>sudo mkdir /var/www/produccion

sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/produccion.conf

sudo nano /etc/apache2/sites-available/produccion.conf
------
ServerName alumno10-3.redeslitterator.site
ServerAdmin debian@localhost
DocumentRoot /var/www/produccion
ErrorLog ${APACHE_LOG_DIR}/error_produccion.log
CustomLog ${APACHE_LOG_DIR}/access_produccion.log combined
------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/10.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Deshabilitar sitios de los ejercicios de apache y wordpress</h4>
                <pre><code>sudo a2dissite 000-default.conf
sudo a2dissite alumno10.conf
sudo a2dissite alumno10-2.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/11.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Habilitar sitios</h4>
                <pre><code>sudo a2ensite preproduccion.conf
sudo a2ensite produccion.conf</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/12.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Reiniciar servicio</h4>
                <pre class="pre-no-img"><code>sudo systemctl restart apache2</code></pre>
            </article>

            <article>
                <h4>Instalar git</h4>
                <pre class="pre-no-img"><code>sudo apt install git</code></pre>
            </article>

            <article>
                <h4>Dar permisos al usuario www-data</h4>
                <pre class="pre-no-img"><code>sudo chown -R www-data:www-data /var/www
sudo find /var/www -type d -exec chmod -R 755 {} \;
sudo find /var/www -type f -exec chmod -R 644 {} \;

sudo chmod 644 /var/www/.ssh/id_rsa.pub
sudo chmod 600 /var/www/.ssh/id_rsa</code></pre>
            </article>

            <article>
                <h4>Cambiar al usuario www-data</h4>
                <pre class="pre-no-img"><code>su www-data</code></pre>
            </article>

            <article>
                <h4>Cambiar de directorio antes de clonar el repositorio</h4>
                <pre class="pre-no-img"><code>cd /var/www</code></pre>
            </article>

            <article>
                <h4>Clonar el repositorio</h4>
                <pre><code>git clone git@gitlab.com:usuario/examen_fernandogomez.git</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/13.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Cambiar de directorio y hacer todos los comandos desde allí</h4>
                <pre class="pre-no-img"><code>cd /var/www/examen_fernandogomez</code></pre>
            </article>

            <article>
                <h4>Crear las ramas master, staging y develop (main ya está creada por defecto)</h4>
                <pre><code>git checkout main
git branch master
git checkout master
git branch staging
git checkout staging
git branch develop</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/14.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crea una rama llamada desarrollo1 a partir de develop con el fichero index.html que contenga la palaba “hola Mundo”</h4>
                <pre><code>git branch desarrollo1
git checkout desarrollo1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/15.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear index</h4>
                <pre><code>nano index.html
----------
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Examen&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
hola Mundo
&lt;/body&gt;
&lt;/html&gt;
----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/16.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir archivos, hacer commit y push </h4>
                <pre><code>git add index.html
git commit -m "crear index"
git push origin desarrollo1</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/17.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mergea la rama en staging.</h4>
                <pre><code>git checkout staging 
git merge origin desarrollo1
git push origin staging</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/18.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Clonar en pre</h4>
                <pre><code>git clone git@gitlab.com:usuario/examen_fernandogomez.git /var/www/preproduccion/</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/19.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Desplegar en pre</h4>
                <pre><code>git checkout staging
git fetch origin
git pull origin staging</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/20.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar preproducción desde el navegador</h4>
                <pre><code>http://alumno10-2.redeslitterator.site/</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/21.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Mergear ramas</h4>
                <pre><code>cd /var/www/examen_fernandogomez
git checkout master
git merge origin staging
git checkout staging
git merge origin master
git checkout develop
git merge origin staging
git push origin master</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/22.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Clonar en pro</h4>
                <pre><code>git clone git@gitlab.com:usuario/examen_fernandogomez.git /var/www/produccion/</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/23.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Desplegar en pro</h4>
                <pre><code>cd /var/www/produccion
git checkout master
git fetch origin
git pull origin master</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/24.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comprobar producción desde el navegador</h4>
                <pre><code>http://alumno10-3.redeslitterator.site/</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/25.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear nueva rama</h4>
                <pre><code>cd /var/www/examen_fernandogomez
git branch desarrollo2
git checkout desarrollo2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/26.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Crear nuevo fichero</h4>
                <pre><code>nano prueba.html
----------
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;prueba&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
prueba
&lt;/body&gt;
&lt;/html&gt;
----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/27.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Editar index para añadir el enlace</h4>
                <pre><code>nano index.html
----------
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Examen&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
hola Mundo
&lt;a href="prueba.html"&gt;enlace&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
----------</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/28.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Añadir archivos, hacer commit y push</h4>
                <pre><code>git add *
git commit -m "crear prueba y añadir enlace"
git push origin desarrollo2</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/29.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Merge staging</h4>
                <pre><code>git checkout staging 
git merge origin desarrollo2
git push origin staging</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/30.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Merge master</h4>
                <pre><code>git checkout master
git merge origin staging
git checkout staging
git merge origin master
git checkout develop
git merge origin staging
git push origin master</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/31.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Desplegar pre</h4>
                <pre><code>cd /var/www/preproduccion
git checkout staging
git fetch origin
git pull origin staging</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/32.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Desplegar pro</h4>
                <pre><code>cd /var/www/produccion
git checkout master
git fetch origin
git pull origin master</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/33.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar pre desde el navegador</h4>
                <figure class="figure">
                    <img src="../img/ej/ej14/34.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/35.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Probar pro desde el navegador</h4>
                <figure class="figure">
                    <img src="../img/ej/ej14/36.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/37.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Comparte el repositorio con fernando.gomez3 como manteiner</h4>
                <pre><code>Manage, members</code></pre>
                <figure class="figure">
                    <img src="../img/ej/ej14/38.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/39.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/40.png" class="figure-img img-fluid" alt="img">
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
