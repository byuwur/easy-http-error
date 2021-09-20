<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        if ($_GET['lang'] == 'es') {
            echo "Hola, mundo, por Yogurt.";
        } else if ($_GET['lang'] == 'en') {
            echo "Hello, world, by Yogurt.";
        }
    } else {
        echo "Hola, mundo, por Yogurt.";
    }
} else if (isset($_COOKIE['lang'])) {
    if ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'en') {
        if ($_COOKIE['lang'] == 'es') {
            echo "Hola, mundo, por Yogurt.";
        } else if ($_COOKIE['lang'] == 'en') {
            echo "Hello, world, by Yogurt.";
        }
    } else {
        echo "Hola, mundo, por Yogurt.";
    }
} else {
    echo "Hola, mundo, por Yogurt.";
}
?>