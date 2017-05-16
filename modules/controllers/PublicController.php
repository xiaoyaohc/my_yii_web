<?php
namespace app\modules\controllers;
use yii\web\Controller;
use app\modules\models\Admin;
use Yii;
class PublicController extends Controller{
    /**
     * 用户登录
     */
    public function actionLogin(){
        $this->layout=false;
        $model=new Admin;

        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();

            if($model->login($post)){
                $this->redirect(['default/index']);
                Yii::$app->end();
            }
        }
        return $this->render('login',['model'=>$model]);
    }

    /**
     * 退出登录(清除session)
     */
    public function actionLogout(){
        Yii::$app->session->removeAll();
        if(!isset(Yii::$app->session['admin']['isLogin'])){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        $this->gaback();//退回原来页面
    }
}