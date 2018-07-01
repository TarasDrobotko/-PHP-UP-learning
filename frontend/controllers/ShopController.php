<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Shop;
use frontend\models\Category;
use frontend\models\Manufacturer;

class ShopController extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $shop = new Shop();
          if ($shop->load(Yii::$app->request->post()) && $shop->save()) {
                  Yii::$app->session->setFlash('success', 'Saved!');
               return $this->refresh();
               }
        return $this->render('index', ['shop'=> $shop,]);
    }
    
    public function actionCategory()
    {   
        $categories = new Category();
          if ($categories->load(Yii::$app->request->post()) && $categories->save()) {
               Yii::$app->session->setFlash('success', 'Saved!');
               return $this->refresh();
               }
        return $this->render('categories', ['categories'=> $categories,]);
    }

    public function actionManufacturer()
    {   
        $manufacturer = new Manufacturer();
          if ($manufacturer->load(Yii::$app->request->post()) && $manufacturer->save()) {
               Yii::$app->session->setFlash('success', 'Saved!');
               return $this->refresh();
               }
        return $this->render('manufacturers', ['manufacturer'=> $manufacturer,]);
    }
    
    public function actionProducts() {
        $productList = Shop::find()->orderBy('date_of_manufacture')->limit(12)->all();
        return $this->render('products', ['productList' => $productList]);
    }
    
}
