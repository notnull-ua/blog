<?php
/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 23.11.2015
 * Time: 20:05
 */
require_once "classes/Articles.class.php";
require_once "classes/Comments.class.php";
try {


    $response = array();
    $start = $_GET[start];
    $step = $_GET[step];
    if(isset($_GET[id]))
       $id_article=$_GET[id];



    switch ($_GET['action']) {

        case 'get_next_articles':
        $response = Articles::getArticles($start, $step);
        break;
        case 'get_next_comments':
            $response = Comments::getComments($id_article,$start, $step);
            break;


        default:
            throw new Exception('Wrong action');
    }

    echo json_encode($response);
} catch (Exception $e) {
    die(json_encode(array('error' => $e->getMessage())));
}