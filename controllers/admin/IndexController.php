<?php
/**
 * Created by PhpStorm.
 * User: lyb
 * Date: 2016/11/16
 * Time: 23:14
 */

namespace app\controllers\admin;


use app\components\LController;

class IndexController extends LController
{
    public function init()
    {
        parent::init();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}