<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 18.11.2015
 * Time: 0:55
 */
class deleteMenu extends Core_admin
{
    public function getContent(){}
    public function handlerForm(){
        if($_GET['del'])
        {
            $id_menu=(int)$_GET['del'];

            $query = "DELETE FROM menu WHERE id_menu='$id_menu'";
            $result=DB::query($query);
            if($this->getMessageQueryErr($result, __FUNCTION__) && DB::getMySQLiObject()->affected_rows!=0){
                $_SESSION['result'] = "Удалено";
                header("Location:?option=edit_menu");
                exit;
            }
            else exit("Error during deleting");
        }
        else {
            exit ("Wrong id article");
        }
    }
}
