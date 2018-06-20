<?php
namespace frontend\models;
use Yii;

use yii\base\Model;

/**
 * Description of Order
 *
 * @author Admin
 */
class Order extends Model {
 public $name;
    public $color;
    public $windowSill;
    public $sashe;
    public $swingSashe;
    public $height;
    public $width;
    public $email;
    public $cell;
    
    public function rules()
    {
        return [
            [['name', 'email', 'color', 'windowSill', 'sashe', 'swingSashe', 'height',
                'width', 'cell'], 'required'],
            [['name'], 'string', 'min' => 2],
            [['color'], 'string'],
            [['email'], 'email'],
            [['windowSill'], 'string'],
            [['sashe'], 'integer', 'min' => 1],
            [['sashe'],  'compare',
              'compareAttribute' => 'swingSashe',
                'operator' => '>=', 'type' => 'number',],    
            [['height'], 'integer', 'min' => 100,  'max' => 200],
            [['width'], 'integer', 'min' => 70,  'max' => 210],
            [['cell'], 'in', 'range' =>[1, 2, 3]],
        ];
    }
    
    
       public static function run($subscriber) {
        
       
            $result = Yii::$app->mailer->compose('/order/letter_admin', ['formData' => Yii::$app->request->post(),])
                    ->setFrom('drobotkot@gmail.com')
                    ->setTo($subscriber)
                    ->setSubject('Order')
                    ->send();
          var_dump($result);
    
       }
}
