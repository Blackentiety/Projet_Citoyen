<?php

class PageController{

    public static function index(){
        require_once('/../public/views/home.php');
        require_once('/../public/templates/GlobalTemplate.php');
    }

    public static function about(){
        require_once('/../public/views/about.php');
        require_once('/../public/templates/GlobalTemplate.php');
    }

    public static function blog(){
        require_once('/../public/views/blog.php');
        require_once('/../public/templates/GlobalTemplate.php');
    }
    
    public static function form(){
        require_once('/../public/views/form.php');
        require_once('/../public/templates/GlobalTemplate.php');
    }

}
