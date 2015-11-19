<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class updateMenu extends Core_admin
{

    public function getContent()
    {

        if ($_GET['id_menu']) {
            $id_menu = (int)$_GET['id_menu'];
        } else {
            echo "Wrong id";
        };
        $menu = $this->getItemsMenu($id_menu);

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
    <input type="hidden" name="id" value="$menu[id_menu]" >
        <label for="title">Заголовок меню:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" value="$menu[name]" required  >
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea class="form-control" name="text" id="text"  rows="7" placeholder="Текст статьи"  required>$menu[text_menu]</textarea>
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
        $text = $_POST['text'];


        if (empty($title) || empty($text)) {
            exit ("Не заполнены обязательные поля");
        }


        $query = " UPDATE menu SET name='$title',  text_menu='$text' WHERE id_menu='$id'";
        $result = DB::query($query);
        if ($this->getMessageQueryErr($result, __FUNCTION__) && DB::getMySQLiObject()->affected_rows != -1) {
            $_SESSION['result'] = "Изменения сохранены";
            header("Location:?option=edit_menu");
            exit;
        } else exit("Error during editing");


    }

}