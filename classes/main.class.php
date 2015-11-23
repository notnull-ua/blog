<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 07.11.2015
 * Time: 23:42
 */
class main extends Core
{

    public function getContent()
    {

        //статическая часть контента
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">
        <div class="articles">';



        //динамическая часть
//        $result = DB::query("SELECT id, title, description, date, img_src FROM  articles ORDER BY date DESC");
//        $this->getMessageQueryErr($result, __FUNCTION__);
        $result = Articles::getArticles(0,5);
        foreach($result as $key=>$value){
            printf("<article class='media'>
                        <h2 class='media-heading'>%s</h2>
                        <p>%s</p>
                        <div class='media-body'>
                            <img class='img-responsive'  src='%s' >
                            <p>%s </p>
                            <p><a class='btn btn-default' href='?option=view&id_article=%s' role='button'>View details &raquo;</a></p>
                        </div>
                   </article>", $value[title],$value[date], $value[img_src], $value[description], $value[id]);
        }
        echo "</div>";
        echo "<button class='btn btn-primary btn-lg next'>Показать еще</button>";
        /*while ($content = $result->fetch_object()) {
            printf("<article class='media'>
                        <h2 class='media-heading'>%s</h2>
                        <p>%s</p>

                        <div class='media-body'>
                            <img class='img-responsive'  src='%s' >
                            <p>%s </p>
                            <p><a class='btn btn-default' href='?option=view&id_article=%s' role='button'>View details &raquo;</a></p>
                        </div>
                   </article>", $content->title,$content->date, $content->img_src, $content->description, $content->id);
        }*/



        //статическая часть
        echo "</div>";

    }


}