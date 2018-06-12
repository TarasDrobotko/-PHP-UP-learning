<?php

namespace console\models;
use Yii;
/**
 * @author Admin
 */
class Sender {
    public static function run($subscribers, $newsList) {
        foreach($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', ['newsList' => $newsList,
                    ])
                    ->setFrom('drobotkot@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
            var_dump($result);
        }
    }
}
