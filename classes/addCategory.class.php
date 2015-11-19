<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 13.11.2015
 * Time: 20:45
 */
class addCategory extends Core_admin
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
        <label for="title">Название категории:</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Название" required >
    </div>
    <input type="submit" class="btn btn-default" value="Добавить">

    </form>
    </div>
HEREDOC;

    }

    protected function handlerForm(){

        $title = $_POST['title'];

        if(empty($title)){
            exit ("Не заполнены обязательные поля");
        }

        $query = "INSERT INTO category
                                  (name_category)
              VALUES ('$title')";
        $result=DB::query($query);
        if($this->getMessageQueryErr($result, __FUNCTION__)){
            $_SESSION['result'] = "Категория добавлена";
            header("Location:?option=addCategory");
            exit;
        }


    }

}