<?php

namespace frontend\models\example;

class ExampleValidation extends \yii\base\Model
{
   public  $options;
// public $siteAddress;
//    public $startValue;
//    public $endValue;
//    
    public function rules()
    {
     return [
//            [['siteAddress'], 'required'],
//            [['siteAddress'], 'url', 'defaultScheme' => 'http'],
            
//             [['startValue'], 'compare',
//             'compareAttribute' => 'endValue',
//                 'operator' => '<',
//                 
            [['options'], 'required'],
            [['options'], 'each', 'rule' => ['integer']],
//                 ],
//                 
//            [['endValue'], 'safe'],
        ];
    }

}
