<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 12.11.2015
 * Time: 14:00
 */
class edit_menu extends Core_admin
{


    public function getContent(){

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        $query = "SELECT id_menu, name FROM menu";
        $result = DB::query($query);
        $this->getMessageQueryErr($result,__FUNCTION__);
        echo "<a class='btn btn-success' role='button' href='?option=addMenu'>Добавить пункт меню</a>";


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
                    </tr>

                    ";
        while ($content = $result->fetch_object()) {
            //printf("<p><span>%s</span><a href=''>%s</a></p>");
            printf("<tr>
                        <td>%s</td>
                        <td>
                        <a href='?option=updateMenu&id_menu=%s'>%s</a>
                        </td>
                        <td><a class='btn btn-primary btn-xs' href='?option=deleteMenu&del=%s'>Удалить</a></td>
                    </tr>", $content->id_menu,$content->id_menu, $content->name,$content->id_menu);
        }
        echo "
                    </thead>
                    </table>
                    </div>";
    }
}