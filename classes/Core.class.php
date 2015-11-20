<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 07.11.2015
 * Time: 23:07
 */
abstract class Core
{
    protected function  getHeader()
    {
        include('header.php');
    }

    protected function  getRightBar(){
        $query = "SELECT id_category, name_category FROM category";
        $result = DB::query("$query");
        $this->getMessageQueryErr($result,__FUNCTION__);

        echo '<div class="right-bar col-md-3 " >
                <section>
                <h2>Categories</h2>
                <ul class="nav nav-pills nav-stacked">';

        while ($cat = $result->fetch_object()) {
            printf("<li role='presentation'><a href='?option=category&id_category=%s'>%s</a> </li>", $cat->id_category, $cat->name_category);
        };
        echo "  </ul>
                 </section>";
                 if(isset($_SESSION['user']))
                 echo"<section>
        <h2>Админ-панель</h2>
        <ul class='nav nav-pills nav-stacked'>
         <li role='presentation'><a href='?option=admin'>Статьи</a> </li>
        <li role='presentation'><a href='?option=edit_menu'>Меню</a> </li>
        <li role='presentation'><a href='?option=edit_category'>Категории</a> </li>
        </ul>
        </section>";
        echo"
        </div>";

    }


    protected function getMessageQueryErr($result, $nameFunc){
    if (!$result) {
        exit("error of database \n" . DB::getMySQLiObject()->error ." in a method: ".$nameFunc);
    }
}

    protected function getMenu()
    {
        //выборка с базы данныхz
        $result = DB::query("SELECT id_menu, name FROM menu");
        $this->getMessageQueryErr($result, __FUNCTION__);

        //вывод статической части меню
        echo '<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?option=main">Blozhek</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
                <li><a href="?option=main">Home</a></li>';

        //вывод пунктов меню
        while ($menu = $result->fetch_object()) {
            printf("<li><a href='?option=menu&id_menu=%s'>%s</a></li>", $menu->id_menu, $menu->name);
        };

        echo ' </ul>';

if (!isset($_SESSION['user']))
echo '<button class="btn btn-success navbar-btn navbar-right" data-toggle="modal" data-target="#login">Войти</button>';
        else echo '<a href="?option=login&exit=true" class="btn btn-danger navbar-btn navbar-right">Выйти</a>';

        echo '
        <!--/.navbar-collapse -->
    </div>
</nav>
                    <!--modal dialog-->
                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Авторизация</h4>
                      </div>
                      <div class="modal-body">

                        <form id="data"  action="javascript:void(null);" method="post">
                            <div class="form-group">
                                <label for="title">Логин:</label>
                                <input type="text" name="login" class="form-control" id="login" placeholder="Логин" required  >
                            </div>
                            <div class="form-group">
                                <label for="text">Пароль:</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Пароль" required  >
                            </div>
                            <div class="result"></div>
                         </form>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button id="singIn" type="submit" form="data" class="btn btn-primary">Войти</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->';
    }

    protected function getFooter()
    {
        include('footer.php');
    }

    abstract function getContent();

    public function getBody()
    {
        if($_POST){
            $this->handlerForm();
        }
        $this->getHeader();
        $this->getMenu();
        $this->getContent();
        $this->getRightBar();
        $this->getFooter();
    }

}