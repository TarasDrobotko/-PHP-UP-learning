<?php

namespace common\components;

use Yii;

/**
 * Description of StringHelper
 *
 * @author Admin
 */
class StringHelper {
    
   private $limit;
   private $limitWords;
    
   public function __construct() {
        $this->limit = Yii::$app->params['shortTextLimit'];
      //  $this->limitWords = Yii::$app->params['shortByWords'];
        }
    
        /**
         * 
         * @param type $string
         * @param type $limit
         * @return string
         */
    public function getShort($string, $limit = null) {
       
        if($limit === null) {
            $limit = $this->limit;
        }
      
$str1 = mb_substr($string, 0, $limit);

if (strrpos(mb_substr($string, 0, $limit + 1), ' ') !== $limit 
        && strrpos(mb_substr($string, 0, $limit), ' ') !== $limit - 1) {
$pos = strpos((substr($string, $limit + 1)), ' ');
$str3 = mb_substr($string, 0, $limit +$pos+1).'...';
        return $str3;
}
else {
    return rtrim($str1).'...';
} 
    }
   
    /**
     * 
     * @param type $string
     * @param type $limitWords
     * @return string
     */
    public function getShortByWords($string, $limitWords = null) {
 if($limitWords === null) {
            $limitWords = $this->limitWords;
        }
        
$array = explode(" ",$string); 
$array = array_slice($array,0,$limitWords); // выбираем первые n слов-элементов
$newtext = implode(" ",$array)."..."; // массив снова перерабатываем в строку
 
    return $newtext;     
    }
}
