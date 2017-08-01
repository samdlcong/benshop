<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 13:54
 */

namespace frontend\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout2';
        return $this->render('index');
    }

    public function actionDetail()
    {
        $this->layout = 'layout2';
        return $this->render('detail');
    }
}