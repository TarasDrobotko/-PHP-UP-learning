<?php

namespace console\models;
use Yii;
 /**
     * Send emails to subscribers with contents of news
     * @param array $subscribers
     * @param array $newsList
     */
 
class Sender {
    public static function run($subscribers, $newsList) {
        
        $count = 0;
        foreach($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', ['newsList' => $newsList,
                    ])
                    ->setFrom('drobotkot@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
           if ($result) {
                $count++;
        }
    }
    return $count;
    }
}
