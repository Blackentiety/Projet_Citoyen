<?php

class PageController{

    public static function index(){
        require_once('/../views/home.php');
        require_once('/../templates/GlobalTemplate.php');
    }

    public static function about(){
        require_once('/../views/about.php');
        require_once('/../templates/GlobalTemplate.php');
    }

    public static function blog(){
        require_once('/../views/blog.php');
        require_once('/../templates/GlobalTemplate.php');
    }
    
    public static function form(){
        require_once('/../views/form.php');
        require_once('/../templates/GlobalTemplate.php');
    }

}
