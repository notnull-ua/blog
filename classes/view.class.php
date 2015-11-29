<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 10.11.2015
 * Time: 0:26
 */
class view extends Core
{

    private $id_article;

    public function __construct(){
        if(isset($_GET['id_article'])){
            $this->id_article = (int)$_GET['id_article'];
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
        if (!isset($_GET['id_article'])) {
            echo('Не правильные данные для вывода статьи');
        } else {
            $id_article = (int)$_GET['id_article'];
            if (!$id_article) {
                echo('Incorrect ID');
            } else {
                $result = DB::query("SELECT id, title, text, date, img_src FROM  articles WHERE id='$id_article'");
                $this->getMessageQueryErr($result, __FUNCTION__);
                if ($result->num_rows == 0) {
                    exit ("Статьи с таким ID не существует");
                }

                $article = $result->fetch_object();
                printf("<article class='media'>
                        <h2>%s</h2>
                        <p class='date'>%s</p>
                            <img class='img-responsive'  src='%s' >


                            <p>%s </p>

                            <div  id='id_article' hidden>%s</div>
                   </article>", $article->title, $article->date, $article->img_src, $article->text, $article->id);
            }
        }


        $this->getComments($id_article, 0, 5);

        //статическая часть
        echo "</div>";
    }

    protected function getComments($id_article, $start, $step)
    {
        $result = Comments::getComments($id_article, $start, $step);

        echo "<hr/><div class='comments'>";
        foreach ($result as $key => $value) {
            printf("
                    <div class='comment'>
                        <span class='date'>%s</span>
                        <h4 class='author'>%s</h4>
                        <p class='text'>%s</p>
                    </div>
                ", $value[date], $value[author], $value[text]);
        }
        echo "</div>";
        echo "<button class='btn btn-primary btn-lg next-comments'>Показать еще</button>";

        if($_SESSION['result']){
            echo $_SESSION['result'];
            unset($_SESSION['result']);
        }
        self::printFormNewComment();

    }

    private static  function printFormNewComment()
    {
printf("
    <form action='' method='post'>
        <div class='form-group'>
            <label for='Name'>Имя</label>
            <input type='text' name='name' class='form-control' id='name' placeholder='Введите ваше имя' required/>
        </div>
        <div class='form-group'>
            <label for='text'>Ваше сообщение:</label>
           <textarea name='text' id='text' rows='7' class='form-control' placeholder='Введите сообщение'></textarea>
        </div>
        <input type='submit'  class='btn btn-default' value='Отправить'/>
    </form>
");

    }

    public function  handlerForm(){


        $name = $_POST['name'];
        //todo - nessesery date in GMD user's
        $date = date ("y-m-d H-M-s ", time());
        $text = $_POST['text'];
        $id_article = $this->id_article;
        if(empty($name)|| empty($text)){
            exit ("Не заполнены обязательные поля");
        }

        $query = "INSERT INTO comments
                                  (author, date, text,id_article)
              VALUES ('$name',  '$date', '$text', '$id_article')";
        $result=DB::query($query);
        //if($this->getMessageQueryErr($result, __FUNCTION__)){
            $_SESSION['result'] = "Комментарий добавлен";
//            header("Location:".$_SERVER['REQUEST_URI']);
            header("Location:?option=view&id_article=".$this->id_article);
            exit;
        //}

    }
}