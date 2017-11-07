<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/7
 * Time: 14:52
 */

namespace app\controllers;
use yii\web\Controller;

class WtestController extends Controller {
    public function actionWtest(){
        return $this->renderPartial('wtest2');
    }
}