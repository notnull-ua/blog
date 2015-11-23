<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 23.11.2015
 * Time: 23:57
 */

require_once "DB.class.php";
require_once "settings.php";
class Comments
{

    public static function getComments($id_article,$start, $step){
        $result = DB::query("SELECT id_comment, author, text, date FROM  comments WHERE id_article=$id_article  ORDER BY date DESC limit $start,$step ");

        if (!$result) {
            exit("error of database \n" . DB::getMySQLiObject()->error);
        }
        $response = array();
        while ($comment = $result->fetch_assoc()){
            $response []=$comment;
        }
        //print_r($response);
        return $response;
    }
}