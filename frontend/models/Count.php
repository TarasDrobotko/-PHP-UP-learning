<?php

namespace frontend\models;

use Yii;

class Count {
    /**
     * 
     * @return string
     */
     
        public static function getCount() {
       
        $count = "SELECT COUNT(*) as count FROM news";
 $result = Yii::$app->db->createCommand($count)->queryAll();

        return $result;
    }
}
