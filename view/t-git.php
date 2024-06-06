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
        <title>Control de versiones con git - Network Services</title>

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
            <h1>Control de versiones con git</h1>
            <p>
                <ul>
                    <li>Entornos:
                        <ul>
                            <li>Producción</li>
                            <li>Preproducción</li>
                        </ul>
                    </li>
                    <li>Ramas:
                        <ul>
                            <li>Main</li>
                            <li>Master</li>
                            <li>Staging</li>
                        </ul>
                    </li>
                </ul>
            </p>

            <article>
                <h4>Paso 1: Habilitar usuario www-data</h4>
                <p>
                    Ver <a href="t-wdata.php">habilitar www-data</a>.
                </p>
            </article>

            <article>
                <h4>Paso 2: Cambiar de usuario a www-data</h4>
                <pre class="pre-no-img"><code>su www-data</code></pre>
            </article>

            <article>
                <h4>Paso 3: Generar claves</h4>
                <pre class="pre-no-img"><code>ssh-keygen -b 4096</code></pre>
            </article>

            <article>
                <h4>Paso 4: Mostrar clave pública</h4>
                <pre class="pre-no-img"><code>cat ~/.ssh/id_rsa.pub</code></pre>
            </article>

            <article>
                <h4>Paso 5: En gitlab, agregar la clave pública</h4>
                <ul>
                    <li>Panel lateral, ssh keys</li>
                    <li>Add new key</li>
                    <li>Pegar la clave pública</li>
                </ul>

                <figure class="figure">
                    <img src="../img/ej/ej14/2.png" class="figure-img img-fluid" alt="img">
                </figure>
                <figure class="figure">
                    <img src="../img/ej/ej14/3.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Paso 6: Crear proyecto/repositorio en gitlab</h4>
                <figure class="figure">
                    <img src="../img/ej/ej14/7.png" class="figure-img img-fluid" alt="img">
                </figure>
            </article>

            <article>
                <h4>Paso 7: Cambiar de usuario a debian</h4>
                <pre class="pre-no-img"><code>su debian</code></pre>
            </article>

            <article>
                <h4>Paso 8: Crear virtualhost preproducción</h4>
                <p>
                    Ver teoría sobre <a href="t-virtualhost.php">virtualhost</a>.
                </p>
            </article>

            <article>
                <h4>Paso 9: Crear virtualhost producción</h4>
                <p>
                    Ver teoría sobre <a href="t-virtualhost.php">virtualhost</a>.
                </p>
            </article>

            <article>
                <h4>Paso 10: Cambiar permisos</h4>
                <pre class="pre-no-img"><code>sudo chown -R www-data:www-data /var/www
sudo find /var/www -type d -exec chmod -R 755 {} \;
sudo find /var/www -type f -exec chmod -R 644 {} \;
sudo chmod 644 /var/www/.ssh/id_rsa.pub
sudo chmod 600 /var/www/.ssh/id_rsa</code></pre>
            </article>

            <article>
                <h4>Paso 11: Instalar git</h4>
                <pre class="pre-no-img"><code>sudo apt install git</code></pre>
            </article>

            <article>
                <h4>Paso 12: Cambiar de usuario a www-data</h4>
                <pre class="pre-no-img"><code>su www-data</code></pre>
            </article>

            <article>
                <h4>Paso 13: Clonar el repositorio</h4>
                <pre class="pre-no-img"><code>cd /var/www
git clone url</code></pre>
            </article>

            <article>
                <h4>Paso 14: Crear ramas</h4>
                <pre class="pre-no-img"><code>cd /var/www/rep
git checkout main
git branch master
git checkout master
git branch staging
git checkout staging
git branch develop</code></pre>
            </article>

            <article>
                <h4>Paso 15: Crear una nueva rama</h4>
                <pre class="pre-no-img"><code>cd /var/www/rep
git branch rama1
git checkout rama1</code></pre>
            </article>

            <article>
                <h4>Paso 16: Guardar cambios</h4>
                <pre class="pre-no-img"><code>git add *
git commit -m "mensaje"
git push origin rama1</code></pre>
            </article>

            <article>
                <h4>Paso 17: Merge staging</h4>
                <pre class="pre-no-img"><code>cd /var/www/rep
git checkout staging 
git merge origin desarrollo2
git push origin staging</code></pre>
            </article>

            <article>
                <h4>Paso 18: Merge master</h4>
                <pre class="pre-no-img"><code>cd /var/www/rep
git checkout master
git merge origin staging
git checkout staging
git merge origin master
git checkout develop
git merge origin staging
git push origin master</code></pre>
            </article>

            <article>
                <h4>Paso 19: Clonar el repositorio en los entornos</h4>
                <pre class="pre-no-img"><code>git clone url /var/www/preproduccion/
git clone url /var/www/produccion/</code></pre>
            </article>

            <article>
                <h4>Paso 20: Desplegar en pre</h4>
                <pre class="pre-no-img"><code>cd /var/www/preproduccion
git checkout staging
git fetch origin
git pull origin staging</code></pre>
            </article>

            <article>
                <h4>Paso 21: Desplegar en pro</h4>
                <pre class="pre-no-img"><code>cd /var/www/produccion
git checkout master
git fetch origin
git pull origin master</code></pre>
            </article>

            <article>
                <h4>Paso 22: Probar desde el navegador</h4>
                <p>
                    Acceder por nombre de dominio.
                </p>
            </article>

            <article>
                <h4>Paso 23: Compartir el repositorio en gitlab</h4>
                <ul>
                    <li>Panel lateral, Manage, Members</li>
                    <li>Invite members</li>
                    <li>Escribir nombre de usuario y seleccionar rol</li>
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
