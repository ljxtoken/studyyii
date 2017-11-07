<?php
namespace app\testwedgit;
use yii\base\Widget;

class TopMenu extends Widget {
       public function init(){
           parent::init();
           echo '<ul>';
       }
    public function run(){
        echo '</ul>';
    }
    public function addMenu($name){
        echo  '<li>'.$name.'</li>';
    }
}