<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class addMenu extends Core_admin
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

        //input form
        print <<<HEREDOC
        <form  action="" method="post">
    <div class="form-group">
        <label for="title">Заголовок меню:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" required >
    </div>
    <div class="form-group">
        <label for="text">Текст:</label>
        <textarea class="form-control" name="text_menu" id="text"  rows="7" placeholder="Текст статьи" required></textarea>
    </div>
    <input type="submit" class="btn btn-default" value="Сохранить">

    </form>
    </div>
HEREDOC;

    }

    protected function handlerForm(){

        $title = $_POST['title'];
        $text_menu = $_POST['text_menu'];

        if(empty($title)|| empty($text_menu)){
            exit ("Не заполнены обязательные поля");
        }

        $query = "INSERT INTO menu
                                  (name,text_menu)
              VALUES ('$title', '$text_menu')";
        $result=DB::query($query);
        if($this->getMessageQueryErr($result, __FUNCTION__)){
            $_SESSION['result'] = "Пункт меню добавлен";
            header("Location:?option=addMenu");
            exit;
        }


    }

}