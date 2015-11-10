<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 10.11.2015
 * Time: 1:28
 */
class category extends Core
{

    public function getContent()
    {

        //статическая часть контента
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9 col-sm-9">';

        //динамическая часть
        if (!$_GET['id_category']) {
            echo "Неправильные данне для вывода статьи";
        } else {
            $id_category = (int)$_GET['id_category'];
            if (!$id_category) {
                echo('Incorrect ID');
            } else {
                $result = DB::query("SELECT id, title, description, date, img_src FROM  articles WHERE category='$id_category'");
                $this->getMessageQueryErr($result, __FUNCTION__);
                if ($result->num_rows > 0) {
                    while ($content = $result->fetch_object()) {
                        printf("<article class='media'>
                        <h2 class='media-heading'>%s</h2>
                        <p>%s</p>
                        <div class='media-left'>
                            <img class='media-object'  src='%s' >
                        </div>
                        <div class='media-body'>

                            <p>%s </p>
                            <p><a class='btn btn-default' href='?option=view&id_article=%s' role='button'>View details &raquo;</a></p>
                        </div>
                   </article>", $content->title, $content->date, $content->img_src, $content->description, $content->id);
                    }
                }
                else {
                    echo "В данной категории нет статтей";
                }


            }
        }

        //статическая часть
        echo "</div>";
    }
}