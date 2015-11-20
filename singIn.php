<?php
/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 20.11.2015
 * Time: 1:08
 */
session_start();
require_once 'classes/DB.class.php';
require_once 'classes/Core.class.php';

$dbOptions = array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'blog_db'
);

DB::init($dbOptions);
class singIn extends  Core {
    public function getContent(){}

    public function __construct(){
        if($_POST){
            $this->handlerForm();
        }


    }
  private function handlerForm()
    {


        $login = strip_tags(DB::esc($_POST['login']));
        $password = strip_tags(DB::esc($_POST['password']));

        if (!empty($login) && !empty($password)) {
            $password = md5($password);
            $query = "SELECT id FROM users WHERE login='$login' AND password= '$password'";
            $result = DB::query($query);
            //$this->getMessageQueryErr($result, __FUNCTION__);
            if ($result->num_rows == 1) {
                $_SESSION['user']= TRUE;
                //header("Location:?option=admin");
                echo "1";
            }
            else {
                exit("Такого пользователя нет");
            }
        } else {
            exit("Поля не заполнены");
        }
    }
}

$obj=new singIn();
 return $obj;


