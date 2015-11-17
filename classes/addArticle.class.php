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

        //check add article
        if($_SESSION['result']){
            echo $_SESSION['result'];
            unset($_SESSION['result']);
        }

        //download categories
            $category = $this->getCategories();
        print <<<HEREDOC
        <form enctype="multipart/form-data" action="" method="post">
    <div class="form-group">
        <label for="title">Заголовок статьи:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" required >
    </div>
    <div class="form-group">
        <label for="description">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description"  rows="4" placeholder="Краткое описание статьи" required></textarea>
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text"  rows="7" placeholder="Текст статьи" required></textarea>
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
                <input type="submit" class="btn btn-default" value="Сохранить">

                        </form>';

 echo "</div>";
    }

protected function handlerForm(){

    if(!empty($_FILES['img_src']['tmp_name'])){
        if(!move_uploaded_file($_FILES['img_src']['tmp_name'], 'images/'.$_FILES['img_src']['name'])){
            exit ("Не удалось загрузить изображение");
        }
        $img_src =  'images/'.$_FILES['img_src']['name'];
    }
    else {
        exit ("Необходимо выбрать изображение");
    }


    $title = $_POST['title'];
    $date = date ("y-m-d", time());
    $description = $_POST['description'];
    $text = $_POST['text'];
    $category = $_POST['category'];

    if(empty($title)|| empty($text)|| empty($description)){
        exit ("Не заполнены обязательные поля");
    }

    $query = "INSERT INTO articles
                                  (title, img_src, date, text, description, category)
              VALUES ('$title', '$img_src', '$date', '$text', '$description', '$category')";
    $result=DB::query($query);
    if($this->getMessageQueryErr($result, __FUNCTION__)){
        $_SESSION['result'] = "Изменение сохранены";
        header("Location:?option=addArticle");
        exit;
    }


}

}