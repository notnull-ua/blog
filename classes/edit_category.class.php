<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 12.11.2015
 * Time: 14:00
 */
class edit_category extends Core_admin
{


    public function getContent(){

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        $query = "SELECT id_category, name_category FROM category";
        $result = DB::query($query);
        $this->getMessageQueryErr($result,__FUNCTION__);
        echo "<a class='btn btn-success' role='button' href='?option=addCategory'>Добавить категорию</a>";


        if($_SESSION['result']){
            echo $_SESSION['result'];
            unset($_SESSION['result']);
        }
        echo "<table class='table table-hover'>
                    <thead>
                    <tr>
                    <th>Id</th>
                    <th>Заголовок</th>
                    <th></th>
                    </thead>
                    </tr>

                    ";
        while ($content = $result->fetch_object()) {
            printf("<tr>
                        <td>%s</td>
                        <td>
                        <a href='?option=updateCategory&id_category=%s'>%s</a>
                        </td>
                        <td><a class='btn btn-primary btn-xs' href='?option=deleteCategory&del=%s'>Удалить</a></td>
                    </tr>", $content->id_category,$content->id_category,$content->name_category,$content->id_category);
        }
        echo "
                    </table>
                    </div>";
    }
}