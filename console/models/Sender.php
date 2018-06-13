<?php

namespace console\models;
use Yii;
 /**
     * Send emails to subscribers with contents of news
     * @param array $subscribers
     */
 
class Sender {
    public static function run($subscribers) {
        
        foreach($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/letter')
                    ->setFrom('drobotkot@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
          var_dump($result);
    }
    
    }
}
