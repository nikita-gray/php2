<?php

/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 22.02.2018
 * Time: 21:05
 */

namespace app\controllers;

use app\classes\ar\Good;
use app\classes\Settings;

class AdminController extends Controller
{

    protected static $css_files = [
        '/css/normalize.css',
        '/css/main_new.css',
        '/css/font-awesome.min.css',
    ];
    protected static $js_files = [
        '/js/jquery-3.2.1.min.js',
        '/js/admin.js',
    ];

    public static function indexAction()
    {
        self::render();
    }

    public static function goodsAction()
    {
        Settings::set('goods', Good::getAll());
        self::render();
    }

    public static function add_goodAction()
    {
        if (Settings::isExist('p_add-new-good')) {
            $good = new Good();
            $good->setTitle(Settings::get('p_title'));
            $good->setDescription(Settings::get('p_description'));
            $good->setPrice(Settings::get('p_price'));
            if ($good->addToDB()) {
                header('Location: /admin/goods/');
                exit;
            }

        }
        self::render();
    }

    public static function edit_goodAction()
    {
        Settings::set('good', new Good(Settings::get('id')));
        self::render();
    }

}