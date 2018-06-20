<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Order;


/**
 * Description of OrderController
 *
 * @author Admin
 */
class OrderController extends Controller{
    public $subscriber;
   public function actionOrder() {
         $model = new Order();
         $formData = Yii::$app->request->post();
         
  $this->subscriber =Yii::$app->params['adminEmail'];
       
        if (Yii::$app->request->isPost) { 

           $model->attributes = $formData;
//            echo '<pre>';
//                print_r($model->attributes);
//                echo '<pre>';die;
            if ($model->validate()) {
                Order::run($this->subscriber);
                Yii::$app->session->setFlash('success', 'Your order has sent to admin!');
            }
        }
       return $this->render('order', ['model' => $model,]); 
    } 
    
}
