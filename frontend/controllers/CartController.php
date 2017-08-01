<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 13:32
 */

namespace frontend\controllers;

use yii\web\Controller;

class CartController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout1';
        return $this->render('index');
    }
}