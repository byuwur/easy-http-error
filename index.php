<?php
if (isset($_GET['lang']))
    switch ($_GET['lang']) {
        case 'es':
        default:
            setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
            echo "GET: Dev, yo soy tu Yogurt";
            break;
        case 'en':
            setcookie('lang', 'en', time() + 31536000, '/', '', false, false);
            echo "GET: Dev, I am your Yogurt";
            break;
    }
else if (isset($_COOKIE['lang']))
    switch ($_COOKIE['lang']) {
        case 'es':
        default:
            setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
            echo "COOKIE: Dev, yo soy tu Yogurt";
            break;
        case 'en':
            setcookie('lang', 'en', time() + 31536000, '/', '', false, false);
            echo "COOKIE: Dev, I am your Yogurt";
            break;
    }
else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    echo "DEFAULT: Dev, yo soy tu Yogurt";
}
?>
<style>
    a {
        display: inline-block;
        margin: 5px 5px 5px 0;
        padding: 5px;
        background-color: #eee;
        color: #000;
        border: 1px solid #000;
    }
</style>
<br>
<a href="error.php?e=404" target="_blank">ERROR 404</a>
<a href="error.php?e=403" target="_blank">ERROR 403</a>
<a href="error.php?e=401" target="_blank">ERROR 401</a>
<a href="error.php?e=400" target="_blank">ERROR 400</a>
<a href="error.php?e=500" target="_blank">ERROR 500</a>
<a href="error.php?e=502" target="_blank">ERROR 502</a>
<a href="error.php?e=503" target="_blank">ERROR 503</a>
<a href="error.php?e=504" target="_blank">ERROR 504</a>
<br>
Usa una cookie "lang" o usa una petición GET "lang" para configurar un idioma<br>
Set a cookie "lang" or use the GET request "lang" to set a language<br>
<a href="?lang=es">Poner en Español (GET)</a>
<a href="?lang=en">Put in English (GET)</a><br>
<a href="./">Recargar/Reload (COOKIE)</a><br>
Para usar la página de error en tu servidor Apache, recuerda incluir el archivo .htacess<br>
To use the error page on your Apache server, remember to include the .htacess file<br>