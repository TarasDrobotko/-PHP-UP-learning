<?php
namespace console\models;

use Yii;
/**
 * Description of News
 *
 * @author Admin
 */
class News {
    const STATUS_NOT_SEND = 1;
    //put your code here
    public static function getList() {
        $sql = "SELECT * FROM news WHERE status = ". self::STATUS_NOT_SEND;
        return Yii::$app->createCommand($sql)->queryAll();
    }
    
     public static function prepareList() {
        
    }
}
