<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 12.11.2015
 * Time: 14:00
 */
class admin extends Core_admin
{


    public function getContent(){

        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9">';

        $query = "SELECT id, title FROM articles";
        $result = DB::query($query);
        $this->getMessageQueryErr($result,__FUNCTION__);

        while ($content = $result->fetch_object()) {
            printf("<p> <a href=''>%s</a></p>");
        }
        echo "</div>";
    }
}