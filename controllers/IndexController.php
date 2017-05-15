<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;
class IndexController extends Controller{
    public function actionIndex(){
        $model=new Test;
        $data=$model->find()->one();
        return $this->render("index",array('row'=>$data));
    }
}