<?php

namespace frontend\controllers;

use frontend\models\Book;
use frontend\models\Publisher;
use Yii;

class BookshopController extends \yii\web\Controller {

    public function actionIndex() {
       // $book = new Book();
//        $book->name='Test book';
//        $book->isbn='8785684578';
       //$book->save();
        $conditions = ['publisher_id' => 1, ];
        
  //$bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();
  $bookList = Book::find()->orderBy('date_published')->limit(20)->all();
//          echo '<pre>';
//          print_r($result);
//          echo '<pre>';die;
        return $this->render('index', ['bookList' => $bookList, ]);
    }

    public function actionCreate() {
        $book = new Book();
        $publishers = Publisher::getList();
        if ($book->load(Yii::$app->request->post()) && $book->save()) {
                Yii::$app->session->setFlash('success', 'Saved!');
                return $this->redirect(['bookshop/index']);
            }
            
        return $this->render('create', ['book' => $book,
            'publishers' => $publishers,
        ]);
    }

}
