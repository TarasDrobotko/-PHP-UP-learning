<?php

namespace console\controllers;

use Yii;
/**
 * @author Admin
 */
class MailerController extends \yii\console\Controller {
   public function actionSend() {
        $result = Yii::$app->mailer->compose()
    ->setFrom('drobotkot@gmail.com')
    ->setTo('drobotkot@gmail.com')
    ->setSubject('Тема сообщения' )
    ->setTextBody('Текст сообщения')
    ->setHtmlBody('<b>Текст сообщения в формате HTML </b>')        
    ->send();
 
var_dump($result);
die;
   }
    
}
