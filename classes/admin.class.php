<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 12.11.2015
 * Time: 14:00
 */
class admin extends Core_admin
{


    public function getContent(){

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        $query = "SELECT id, title FROM articles";
        $result = DB::query($query);
        $this->getMessageQueryErr($result,__FUNCTION__);
        echo "<a class='btn btn-success' role='button' href='?option=addArticle'>Добавить статью</a>";
        echo "<table class='table table-hover'>
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>Заголовок</th>
                    <th></th>
                    </tr>

                    ";
        while ($content = $result->fetch_object()) {
            //printf("<p><span>%s</span><a href=''>%s</a></p>");
            printf("<tr>
                        <td>%s</td>
                        <td>
                        <a href='?option=update&id_article'>%s</a>
                        </td>
                        <td><a class='btn btn-primary btn-xs' href='?option=deleteArticle&id_article=%s'>Удалить</a></td>
                    </tr>", $content->id, $content->title,$content->id);
        }
        echo "
                    </thead>
                    </table>
                    </div>";
    }
}