<?php
/**
 * Created by PhpStorm.
 * User: Vladislav
 * Date: 23.11.2015
 * Time: 13:32
 */

$dbOptions = array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'blog_db'
);

DB::init($dbOptions);