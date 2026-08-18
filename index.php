<?php
$langInput = $_GET["lang"] ?? $_COOKIE["lang"] ?? "es";
$lang = is_string($langInput) && $langInput === "en" ? "en" : "es";
setcookie("lang", $lang, ["expires" => time() + 31536000, "path" => "/", "samesite" => "Lax",]);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>easy-http-error = PHP demo</title>
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
</head>

<body>
  <a href="_error.php?e=400">ERROR 400</a>
  <a href="_error.php?e=401">ERROR 401</a>
  <a href="_error.php?e=403">ERROR 403</a>
  <a href="_error.php?e=404">ERROR 404</a>
  <a href="_error.php?e=500">ERROR 500</a>
  <a href="_error.php?e=502">ERROR 502</a>
  <a href="_error.php?e=503">ERROR 503</a>
  <a href="_error.php?e=504">ERROR 504</a>
  <br>
  Usa una cookie <code>lang</code> o <code>?lang=es|en</code> para configurar un idioma.<br>
  Set a <code>lang</code> cookie or use <code>?lang=es|en</code> to set a language.<br>
  <a href="?lang=es">Poner en Español <code>(GET)</code></a>
  <a href="?lang=en">Set in English <code>(GET)</code></a>
  <br>
  Para Apache, incluye <code>.htaccess</code> o copia sus directivas a tu configuración.<br>
  For Apache, include <code>.htaccess</code> or copy its directives into your server configuration.
</body>

</html>