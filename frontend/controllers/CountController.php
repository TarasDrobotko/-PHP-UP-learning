<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Count;

class CountController extends Controller {
    
    public function actionIndex() {         
         $count = Count::getCount();
         
        return $this->render('count', [
            'count' => $count,
        ]);
    }
    
}