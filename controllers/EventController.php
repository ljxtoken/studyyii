<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/8
 * Time: 10:06
 */

namespace app\controllers;
use app\eventtest\mouse;
use yii\base\Event;
use yii\web\Controller;
use app\eventtest\testevent;
use app\eventtest\dog;
class EventController extends Controller{
    public function actionIndex(){
        $cat=new testevent;
        $mouse=new mouse();
        $dog=new dog();
        $cat->on('miao',[$mouse,'run']);
        $cat->on('miao',[$dog,'look']);
        $cat->shout();
    }
    public function actionIndexall(){
        $cat=new testevent;
        $cat2=new testevent;
        $mouse=new mouse();
        $dog=new dog();
        Event::on(testevent::className(),'miao',[$mouse,'run']);
        Event::on(testevent::className(),'miao',[$dog,'look']);
        $cat->shout();
        $cat2->shout();
    }

    }

