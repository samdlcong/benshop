<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 14:04
 */

namespace backend\controllers;

use yii\web\Controller;

class DefaultController extends Controller{
    public function actionIndex(){
        $this->layout = 'layout1';
        return $this->render('index');
    }
}