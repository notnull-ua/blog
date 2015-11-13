<?php

/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 11.11.2015
 * Time: 22:27
 */
abstract class Core_admin {

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
        </section>
        <section>
        <h2>Админ-панель</h2>
        <ul class='nav nav-pills nav-stacked'>
         <li role='presentation'><a href='?option=edit_article'>Статьи</a> </li>
        <li role='presentation'><a href='?option=edit_menu'>Меню</a> </li>
        <li role='presentation'><a href='?option=edit_article'>Категории</a> </li>
        </ul>
        </section>
        </div>";

    }


    protected function getMessageQueryErr($result, $nameFunc){
        if (!$result) {
            exit("error of database \n" . DB::getMySQLiObject()->error ." in a method: ".$nameFunc);
        }
    }

    protected function getMenu()
    {
        //выборка с базы данных
        $result = DB::query("SELECT id_menu, name FROM menu");
        $this->getMessageQueryErr($result, __FUNCTION__);

        //вывод статической части меню
        echo '<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
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

        echo ' </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>';
    }

    protected function getFooter()
    {
        include('footer.php');
    }

    abstract function getContent();

    protected function getCategories(){
        $query="SELECT id_category, name_category FROM category";
        $result=DB::query($query);
        $this->getMessageQueryErr($result, __FUNCTION__);
        $row=array();
        while($category = $result->fetch_assoc()){
            $row[]=$category;
        }
        return $row;

    }

    public function getBody()
    {
        $this->getHeader();
        $this->getMenu();
        $this->getContent();
        $this->getRightBar();
        $this->getFooter();
    }

}