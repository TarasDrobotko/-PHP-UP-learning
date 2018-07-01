<?php

namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;

/**
 * @author Admin
 */
class Shop extends ActiveRecord {
    public static function tableName() {
        return '{{product}}';
    }
    
    public function rules() {
       return [
          [['product', 'date_of_manufacture', 'category_id' ], 'required'],
           [['product'], 'string'],
           [['date_of_manufacture'], 'date', 'format' => 'php:Y-m-d'],
           [['category_id'], 'integer'],
           [['manufacturer_id'], 'integer'],
      ];   
    }
    
    public function getDateManufactured() {
        return Yii::$app->formatter->asDate($this->date_of_manufacture);
    }
    
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id'])->one();
    }
    
     public function getCategoryName() {
         if($category = $this->getCategory()) {
             return $category->category_name;
         }
         return "Not set.";
     }
     
      public function getManufacturer() {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id'])->one();
    }
    
     public function getManufacturerName() {
         if($manufacturer = $this->getManufacturer()) {
             return $manufacturer->manufacturer. ", ". $manufacturer->country;
         }
         return "Not set.";
     }
}
