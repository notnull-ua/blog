<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class updateCategory extends Core_admin
{

    public function getContent()
    {

        if ($_GET['id_category']) {
            $id_category = (int)$_GET['id_category'];
        } else {
            echo "Wrong id";
        };
        $category = $this->getItemsCategory($id_category);

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        //check add article
        if ($_SESSION['result']) {
            echo $_SESSION['result'];
            unset($_SESSION['result']);
        }

        print <<<HEREDOC
        <form  action="" method="post">
    <div class="form-group">
    <input type="hidden" name="id" value="$category[id_category]" >
        <label for="title">Название категории:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Название" value="$category[name_category]" required  >
    </div>
    <input type="submit" class="btn btn-default" value="Сохранить">
        </form>
          </div>
HEREDOC;

    }

    protected function handlerForm()
    {



        $id = $_POST['id'];
        $title = $_POST['title'];


        if (empty($title)) {
            exit ("Не заполнены обязательные поля");
        }


        $query = " UPDATE category SET name_category='$title' WHERE id_category='$id'";
        $result = DB::query($query);
        if ($this->getMessageQueryErr($result, __FUNCTION__) && DB::getMySQLiObject()->affected_rows != -1) {
            $_SESSION['result'] = "Изменения сохранены";
            header("Location:?option=edit_category");
            exit;
        } else exit("Error during editing");


    }

}