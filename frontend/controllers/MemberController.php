<?php
/**
 * Created by PhpStorm.
 * User: samdlcong
 * Date: 2017/8/1
 * Time: 13:36
 */

namespace frontend\controllers;

use yii\web\Controller;

class MemberController extends Controller
{
    public function actionAuth()
    {
        $this->layout = 'layout1';
        return $this->render('auth');
    }
}