<?php

namespace frontend\models;
use Yii;

use yii\base\Model;
/**
 * @author Admin
 */
class Comments extends Model {

    public $name;
    public $email;
    public $text;
    

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['name'], 'string', 'min' => 2],
            [['email'], 'email'],
            [['text'], 'string'],
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO comment  (id, author, email, text) 
                VALUES (null, '{$this->name}', '{$this->email}', '{$this->text}')";
                  return Yii::$app->db->createCommand($sql)->execute();
    }
    
    public static function find() {
        
          $sql = 'SELECT * FROM comment';
          return   Yii::$app->db->createCommand($sql)->queryAll();
}

}
