<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 07.11.2015
 * Time: 23:42
 */
class login extends Core
{

    public function __construct(){
        if($_SESSION['user']){
            header("Location:?option=admin");
        }
        if(isset($_GET['exit'])&&$_GET['exit']==true){
            session_destroy();
            header("Location:?option=main");
        }
    }

    public function getContent()
    {

        //статическая часть контента
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        //динамическая часть
        print <<<HEREDOC
        <form   action="" method="post">
    <div class="form-group">
        <label for="title">Логин:</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="Логин" required  >
    </div>
    <div class="form-group">
        <label for="text">Пароль:</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль" required  >
    </div>
    <input type="submit" class="btn btn-default" value="Войти">
        </form>

HEREDOC;


        //статическая часть
        echo "</div>";


    }

    protected function handlerForm()
    {
        $login = strip_tags(DB::esc($_POST['login']));
        $password = strip_tags(DB::esc($_POST['password']));

        if (!empty($login) && !empty($password)) {
            $password = md5($password);
            $query = "SELECT id FROM users WHERE login='$login' AND password= '$password'";
            $result = DB::query($query);
            $this->getMessageQueryErr($result, __FUNCTION__);
            if ($result->num_rows == 1) {
                $_SESSION['user']= TRUE;
                header("Location:?option=admin");
            }
            else {
                exit("Такого пользователя нет");
            }
        } else {
            exit("Поля не заполнены");
        }
    }

}