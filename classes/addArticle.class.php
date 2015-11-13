<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class addArticle extends Core_admin
{
    public function getContent(){
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';
            $category = $this->getCategories();
        print <<<HEREDOC
        <form enctype="multipart/form-data" action="" method="post">
    <div class="form-group">
        <label for="title">Заголовок статьи:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" >
    </div>
    <div class="form-group">
        <label for="description">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description"  rows="4" placeholder="Краткое описание статьи"></textarea>
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea class="form-control" name="description" id="text"  rows="7" placeholder="Текст статьи"></textarea>
    </div>
    <div class="form-group ">
        <label for="file">Изображение:</label>
        <input type="file" name="img_src" id="file" accept="image/*">
    </div>
 <div class='form-group'>
        <label for='category'>Категория:</label>
        <select name='category' id='category'>
HEREDOC;

        foreach ($category as $item){
            echo "
            <option value='".$item["id_category"]."'>".$item['name_category']."</option>
        ";

        }

           echo '</select>
                </div>
                <input type="button" class="btn btn-default" value="Сохранить">

                        </form>';

 echo "</div>";
    }
}