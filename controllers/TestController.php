<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/3
 * Time: 13:34
 */
namespace app\controllers;

use yii\web\Controller;
use app\toolclass\json;
use yii\behaviors;
use yii\httpCache;
class TestController extends Controller
{
    public function actionTest()
    {
        $this->layout = 'main2';
        return $this->render('test', ['ljx' => '我是廖建星']);
    }

    public function actionTestdb()
    {

        $data2 = \Yii::$app->db->createCommand("select * from test where id=:id")->bindValue(':id','2')->queryOne();
        return $this->render('testdb', ['data' => $data2]);
    }
    public function actionTestdb2()
    {
        $data = \Yii::$app->db->createCommand("select * from test")->queryOne();
        $data2 = \Yii::$app->db->createCommand("select * from test where id=:id")->bindValue(':id','2')->queryOne();
        return json::tojson($data2);
    }
    public function actionCache(){
        $cache=file_get_contents(__DIR__."/../cache/data.txt");
        return $this->renderPartial('cache',['cache'=>$cache]);
    }
    public function behaviors(){
        return [
            [
                'class'=>'yii\filters\httpCache',
                'lastModified'=>function(){
                    $now_time=time()-3000;
                    return $now_time;
                },
                'etagSeed'=>function(){
                    $file_path=__DIR__."/../cache/data.txt";
                    $file=fopen($file_path,"r");
                    $ftitle=fgets($file);
                    fclose($file);
                    return $ftitle;
                }
            ]
        ];
    }
}