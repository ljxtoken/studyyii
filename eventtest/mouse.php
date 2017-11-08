<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/8
 * Time: 9:56
 */

namespace app\eventtest;


class mouse {
  public function run($e){
      echo $e->message;
      echo 'I am running <br>';
  }
}