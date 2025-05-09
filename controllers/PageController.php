<?php

class PageController{

    public static function index(){
        require_once(__DIR__ . '/../views/home.php');
        require_once(__DIR__ . '/../templates/GlobalTemplate.php');
    }

    public static function about(){
        require_once(__DIR__ . '/../views/about.php');
        require_once(__DIR__ . '/../templates/GlobalTemplate.php');
    }

    public static function blog(){
        require_once(__DIR__ . '/../views/blog.php');
        require_once(__DIR__ . '/../templates/GlobalTemplate.php');
    }
    
    public static function form(){
        require_once(__DIR__ . '/../views/form.php');
        require_once(__DIR__ . '/../templates/GlobalTemplate.php');
    }

}
