<?php

namespace console\controllers;

use Yii;
use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * @author Admin
 */
class MailerController extends \yii\console\Controller {
    /**
     * sending newsletter
     */
   public function actionSend() {
       
       $newsList = News::getList();
         $subscribers = Subscriber::getList();
         $count = Sender::run($subscribers, $newsList);
         Console::output("\n Emails sent: {$count}");
      // print_r($subscribers);die;
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
