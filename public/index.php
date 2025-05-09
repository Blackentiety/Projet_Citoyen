<?php 

spl_autoload_register(function($class){
    $baseDir = __DIR__ . '/../';
    $class = ucfirst($class);

    if (file_exists($baseDir . "models/{$class}.php"))
        require_once $baseDir . "models/{$class}.php";

    if (file_exists($baseDir . "controllers/{$class}.php"))
        require_once $baseDir . "controllers/{$class}.php";
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

            case ($uri === '/blog'):
                $router->getRoute('Page', 'blog');
                break;
            
            case ($uri === '/form'):
                $router->getRoute('Page', 'form');
                break;
            
            case ($uri === '/a-propos'):
                $router->getRoute('Page', 'about');
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
    echo "Erreur : 404";}
?>