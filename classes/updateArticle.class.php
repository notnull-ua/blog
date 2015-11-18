<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class updateArticle extends Core_admin
{
    private $article;

    public function getContent()
    {

        if ($_GET['id_article']) {
            $id_article = (int)$_GET['id_article'];
        } else {
            echo "Wrong id";
        };
        $article = $this->getArticle($id_article);

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        //check add article
        if ($_SESSION['result']) {
            echo $_SESSION['result'];
            unset($_SESSION['result']);
        }

        //download categories
        $category = $this->getCategories();
        print <<<HEREDOC
        <form enctype="multipart/form-data" action="" method="post">
    <div class="form-group">
    <input type="hidden" name="id" value="$article[id]" >
        <label for="title">Заголовок статьи:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" value="$article[title]" required  >
    </div>
    <div class="form-group">
        <label for="description">Краткое описание:</label>
        <textarea class="form-control" name="description" id="description"  rows="4" placeholder="Краткое описание статьи"  required>$article[description]</textarea>
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text"  rows="7" placeholder="Текст статьи"  required>$article[text]</textarea>
    </div>
    <div class="form-group ">
        <label for="file">Изображение:</label>
        <input type="file" name="img_src" id="file" accept="image/*">
        <img src="$article[img_src]"  wight=100px height=100px>
    </div>
 <div class='form-group'>
        <label for='category'>Категория:</label>
        <select name='category' id='category' >
HEREDOC;




        foreach ($category as $item) {
            if ($article['category'] == $item['id_category']) {
                echo " <option selected value='" . $item["id_category"] . "'>" . $item['name_category'] . "</option>";

            } else {
                echo " <option  value='" . $item["id_category"] . "'>" . $item['name_category'] . "</option>";
            }

        }

        echo '</select>
                </div>
                <input type="submit" class="btn btn-default" value="Сохранить">

                        </form>';

        echo "</div>";
    }

    protected function handlerForm()
    {
        $article = $this->getArticle($_GET['id_article']); //need to existing save images

        if (!empty($_FILES['img_src']['tmp_name'])) {
            if (!move_uploaded_file($_FILES['img_src']['tmp_name'], 'images/' . $_FILES['img_src']['name'])) {
                exit ("Не удалось загрузить изображение");
            }
            $img_src = 'images/' . $_FILES['img_src']['name'];
        } else {
            $img_src = $article[img_src];
            //echo "$img_src";
        }

        $id = $_POST['id'];
        $title = $_POST['title'];
        $date = date("y-m-d", time());
        $description = $_POST['description'];
        $text = $_POST['text'];
        $category = $_POST['category'];


        if (empty($title) || empty($text) || empty($description)) {
            exit ("Не заполнены обязательные поля");
        }


        $query = " UPDATE articles SET title='$title', img_src='$img_src', date='$date', text='$text', description='$description', category='$category' WHERE id='$id'";
        $result = DB::query($query);
        if ($this->getMessageQueryErr($result, __FUNCTION__) && DB::getMySQLiObject()->affected_rows != -1) {
            $_SESSION['result'] = "Изменение сохранены";
            header("Location:?option=admin");
            exit;
        } else exit("Error during editing");


    }

}