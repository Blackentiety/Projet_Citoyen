<?php 

spl_autoload_register(function($class){
    $class = ucfirst($class);

    if(file_exists("models/{$class}.php"))
    require_once "models/{$class}.php";

    if(file_exists("controllers/{$class}.php"))
    require_once "controllers/{$class}.php";
});
try{
    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $queryString = $_SERVER['QUERY_STRING'] ?? null;
    $router = new Router($uri, $method);

    $uri = str_replace("?", "", $uri);
    if ($queryString != null){
        $uri = str_replace($queryString, "", $uri);
    }

    if ($method ==='GET'){
        switch(true){
            case ($uri === '/'):
                $router->getRoute('Page', 'index');
                break;

            case ($uri === '/Blog'):
                $router->getRoute('Page', 'Blog');
                break;
            default:
                throw new Exception("Page not found", 404);
            break;
        }
    }
    if ($method ==='POST'){
        switch(true){
            
        }
    }
}
catch(Exception $e){
    echo Erreur : 404;}
?>