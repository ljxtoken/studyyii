<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/8
 * Time: 9:44
 */

namespace app\eventtest;
use yii\base\component;
use yii\base\Event;
class testevent extends component {
       public function shout(){
           echo 'miao <br>';
           $me=new MyEvent();
           $me->message='hello myevent <br>';
           $this->trigger('miao',$me);
       }
}
class MyEvent extends Event {
    public $message;
}