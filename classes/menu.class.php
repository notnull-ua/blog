<?php

class menu extends Core
{
    public function getContent()
    {
        //статическая часть контента
        echo '<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-9 col-sm-9">';

        //динамическая часть
        if (!isset($_GET['id_menu'])) {
            echo('Не правильные данные для вывода меню');
        } else {
            $id_menu = (int)$_GET['id_menu'];
            if (!$id_menu) {
                echo('Incorrect ID');
            } else {
                $result = DB::query("SELECT id_menu, name, text_menu FROM  menu WHERE id_menu='$id_menu'");
                $this->getMessageQueryErr($result, __FUNCTION__);
                if ($result->num_rows == 0) {
                    exit ("Меню с таким ID не существует");
                }

                $article = $result->fetch_object();
                printf("<article class='media'>
                            <h2>%s</h2>
                            <p>%s </p>
                   </article>", $article->name, $article->text_menu);
            }
        }


        //статическая часть
        echo "</div>";
    }
}