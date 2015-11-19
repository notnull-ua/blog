<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 18.11.2015
 * Time: 0:55
 */
class deleteCategory extends Core_admin
{
    public function getContent(){}
    public function handlerForm(){
        if($_GET['del'])
        {
            $id_category=(int)$_GET['del'];

            $query = "DELETE FROM category WHERE id_category='$id_category'";
            $result=DB::query($query);
            if($this->getMessageQueryErr($result, __FUNCTION__) && DB::getMySQLiObject()->affected_rows!=0){
                $_SESSION['result'] = "Удалено";
                header("Location:?option=edit_category");
                exit;
            }
            else exit("Error during deleting");
        }
        else {
            exit ("Wrong id article");
        }
    }
}
