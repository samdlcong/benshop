<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 13:51
 */

namespace frontend\controllers;

use yii\web\Controller;

class OrderController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout2';
        return $this->render('index');
    }

    public function actionCheck()
    {
        $this->layout = 'layout1';
        return $this->render('check');
    }
}