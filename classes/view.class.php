<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 10.11.2015
 * Time: 0:26
 */
class view extends Core
{
    public function getContent(){
        //статическая часть контента
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        //динамическая часть
        if(!isset($_GET['id_article']))
        {
           echo ('Не правильные данные для вывода статьи');
        }
        else {
            $id_article = (int)$_GET['id_article'];
            if(!$id_article){
                echo ('Incorrect ID');
            }
            else {
                $result = DB::query("SELECT id, title, text, date, img_src FROM  articles WHERE id='$id_article'");
                $this->getMessageQueryErr($result, __FUNCTION__);
                if($result->num_rows==0){
                    exit ("Статьи с таким ID не существует");
                }

                $article = $result->fetch_object();
                printf("<article class='media'>
                        <h2>%s</h2>
                        <p class='date'>%s</p>
                        <div>
                            <img class='media-object'  src='%s' >
                        </div>


                            <p>%s </p>


                   </article>", $article->title,$article->date, $article->img_src, $article->text, $article->id);
            }
        }




        //статическая часть
        echo "</div>";
    }
}