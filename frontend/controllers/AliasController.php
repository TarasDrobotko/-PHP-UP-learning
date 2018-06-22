<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class AliasController extends Controller {
    
    public function actionExample(){
   // Yii::setAlias('@files', '/var/www/project/frontend/web/files');    
   echo Yii::getAlias('@webroot');
  
//   var_dump($result);
    }
}
