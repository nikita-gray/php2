<?php

/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 22.02.2018
 * Time: 21:05
 */

namespace app\controllers;

use app\classes\DB;
use app\classes\Good;
use app\classes\Router;

class MainController extends Controller
{

    public static function indexAction() {
        Router::setParam('goods', Good::getAll("SELECT * FROM `goods` LIMIT 4;"));
        self::render();
    }

    public static function goodsAction() {
        Router::setParam('goods', Good::getAll());
        self::render();
    }

}