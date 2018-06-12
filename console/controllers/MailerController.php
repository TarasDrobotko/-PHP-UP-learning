<?php

namespace console\controllers;

use Yii;

use console\models\News;
/**
 * @author Admin
 */
class MailerController extends \yii\console\Controller {
   public function actionSend() {
       $list = News::getList();
       print_r($list);die;
//       $result = Yii::$app->mailer->compose()
//       ->setFrom('drobotkot@gmail.com')
//       ->setTo('drobotkot@gmail.com')
//       ->setSubject('Тема сообщения' )
//       ->setTextBody('Текст сообщения')
//       ->setHtmlBody('<b>Текст сообщения в формате HTML </b>')        
//       ->send();
// 
//var_dump($result);
//die;
   }
    
}
