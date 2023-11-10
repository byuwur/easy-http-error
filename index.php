<?php
if (isset($_GET['lang']))
    switch ($_GET['lang']) {
        case 'es':
        default:
            setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
            break;
        case 'en':
            setcookie('lang', 'en', time() + 31536000, '/', '', false, false);
            break;
    }
else if (isset($_COOKIE['lang']))
    switch ($_COOKIE['lang']) {
        case 'es':
        default:
            setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
            break;
        case 'en':
            setcookie('lang', 'en', time() + 31536000, '/', '', false, false);
            break;
    }
else setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
?>
<style>
    a {
        display: inline-block;
        margin: 4px;
        padding: 4px;
        background-color: #eee;
        color: #000;
        border: 1px solid #000;
    }
</style>
<a href="_error.php?e=404">ERROR 404</a>
<a href="_error.php?e=403">ERROR 403</a>
<a href="_error.php?e=401">ERROR 401</a>
<a href="_error.php?e=400">ERROR 400</a>
<a href="_error.php?e=500">ERROR 500</a>
<a href="_error.php?e=502">ERROR 502</a>
<a href="_error.php?e=503">ERROR 503</a>
<a href="_error.php?e=504">ERROR 504</a>
<br>
Usa una cookie "lang" o usa una <code>petición GET "lang"</code> para configurar un idioma.<br>
Set a cookie "lang" or use the <code>GET request "lang"</code> to set a language.<br>
<a href="?lang=es">Poner en Español <code>(GET)</code></a>
<a href="?lang=en">Set in English <code>(GET)</code></a><br>
Para usar la página de error en tu servidor Apache, recuerda incluir el archivo <code>.htacess</code> o configura directamente tu <code>apache.conf</code>.<br>
To use the error page on your Apache server, remember to include the <code>.htacess</code> file or configure your <code>apache.conf</code> directly.<br>