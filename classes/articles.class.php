<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 23.11.2015
 * Time: 18:37
 */

require_once "DB.class.php";
require_once "settings.php";

 class Articles
{

  public static function getArticles($start,$step){
      $result = DB::query("SELECT id, title, description, date, img_src FROM  articles ORDER BY date DESC limit $start,$step ");
      /*$count = DB::query("SELECT COUNT(*) FROM articles");
      $count=$count->fetch_assoc()['COUNT(*)'];*/

      if (!$result) {
          exit("error of database \n" . DB::getMySQLiObject()->error);
      }
      $response = array();
      while ($article = $result->fetch_assoc()){
          $response []=$article;
      }
      return $response;

  }
}