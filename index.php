<?php
/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 07.11.2015
 * Time: 23:03
 */
session_start();


header("Content-Type: text/html; charset=utf-8");

require "classes/DB.class.php";
require "classes/Core.class.php";
require "classes/Core_admin.class.php";
require "classes/articles.class.php";
require_once "classes/Comments.class.php";
require "settings.php";

 function __autoload($class_name){
     $file = 'classes/' . $class_name . '.class.php';
     if (file_exists("$file")) {
         include("$file");
         if (!class_exists("$class_name")) {
             exit ("<p>Не правильные данные для входа</p>");
         }
     } else {
         exit("<h2>Error 404</h2> <p>Не правильный адресс</p> ");
     }
 }
if (isset($_GET['option'])) {
    $class = trim(strip_tags($_GET['option']));
} else {
    $class = 'main';
}

$obj=new $class;
$obj->getBody();
