<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

/**
 * @author Admin
 */
class BlogController extends Controller {
    
   public function actionIndex() {
       
        return $this->render('index');
    }

}

