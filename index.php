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