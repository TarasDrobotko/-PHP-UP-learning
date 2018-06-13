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
     * sending newsletter. Task 10.3.
     */
   public function actionSend() {
       
//       $newsList = News::getList();
      $subscribers = Subscriber::getList();
      Yii::$app->timeZone = 'Europe/Kiev';
       Sender::run($subscribers);
//         Console::output("\n Emails sent: {$count}");
      // print_r($subscribers);die;
        $file = fopen("/var/www/project/frontend/web/log.txt", "a");
        $myDate = date('H:i:s d.m.Y')."\r\n";
        fwrite($file, $myDate);
        fclose($file);

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
