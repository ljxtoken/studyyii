<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/6
 * Time: 11:45
 */

namespace app\toolclass;


class json {
    public static function tojson($data){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $data;
    }
}