<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 17:12
 */

namespace backend\controllers;

use yii\web\Controller;

class PublicController extends Controller{
    public function actionLogin(){
        $this->layout = false;
        return $this->render('login');
    }
}