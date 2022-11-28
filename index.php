<?php

include_once 'controllers/controllers.php';

// echo " bonjour mon ami ";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if (strpos($url, "connexion")!== false) {

// }

// echo $uri;
$controller = new Controller();

if ('/crudphp/index.php/connexion' == $uri) {
    echo $controller->connexion();
} elseif ('/crudphp/index.php/index' == $uri) {
    echo $controller->acceuil();

} else {
    echo 'cbag';
}
