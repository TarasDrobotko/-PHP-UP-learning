<?php
namespace frontend\controllers;
use Yii;
use Faker\Factory;
use yii\web\Controller;
//use frontend\models\News;
//use frontend\models\Test;

class TestController extends Controller {
    
    public function actionGenerate() {
        /* @ var $faker  a Faker\Generator */
         $faker = Factory::create();
          for ($j = 0; $j < 100; $j++) {
            
            $news = [];
            for ($i = 0; $i < 100; $i++) {
                $news[] = [$faker->text(35), $faker->text(rand(1000, 2000)), rand(0, 1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
            
        }
        die('stop');
//        for ($i = 0; $i < 100; $i++) {
//            $faker = Factory::create();
//            $newsItem = new News();
//            $newsItem->title = $faker->text(35);
//            $newsItem->content = $faker->text(rand(1000, 2000));
//            $newsItem->status = rand(0, 1);
//            $newsItem->save();
//        }
//            die('stop');
//        }
    }

//    public function actionIndex() {
//         
//         $max = Yii::$app->params['maxNewsInList'];
//         
//         $list = Test::getNewsList($max);
//         
//         $listByWords = Test::getNewsListByWords($max);
//        return $this->render('index', [
//            'list' => $list,
//            'listByWords' => $listByWords,
//        ]);
//    }
//    
//    public function actionView($id) {
//        
//        
//      
//        $item = Test::getItem($id);
//        
//        return $this->render('view', [
//            'item' => $item,
//        ]);
//    }
//    public function actionMail() 
//            {
//    $result = Yii::$app->mailer->compose()
//    ->setFrom('drobotkot@gmail.com')
//    ->setTo('drobotkot@gmail.com')
//    ->setSubject('Тема сообщения' )
//    ->setTextBody('Текст сообщения')
//    ->setHtmlBody('<b>Текст сообщения в формате HTML </b>')        
//    ->send();
//    
//    var_dump($result);
//    die;
    
   // }
}

//namespace frontend\controllers;
//
//use Yii;
//use yii\web\Controller;
//use frontend\models\Test;
//use frontend\models\example\ExampleValidation;
//
//class TestController extends Controller
//{
//    
//    public function actionValidation()
//    {
//        $model = new ExampleValidation();
//
//        $formData = Yii::$app->request->post();
//        
//        if (Yii::$app->request->isPost) {
//            
//            $model->attributes = $formData;         
//                                                
//            if($model->validate()) {
//                echo '<pre>';
//                print_r($model->attributes);
//                echo '<pre>';die;
//                
//                Yii::$app->session->setFlash('success', 'Data validated!');
//           }
//        }
//        
//        return $this->render('validation', [
//            'model' => $model,
//        ]);
//    }
//
//    public function actionIndex()
//    {
//        
//        $max = Yii::$app->params['maxNewsInList'];
//        
//        $list = Test::getNewsList($max);
//                
//        return $this->render('index', [
//            'list' => $list,
//        ]);
//    }
//    
//    public function actionView($id)
//    {
//        $item = Test::getItem($id);
//
//        return $this->render('view', [
//            'item' => $item 
//        ]);
//    }    
//
//    public function actionMail()
//    {
//        $result = Yii::$app->mailer->compose()
//                ->setFrom('test.php.up@gmail.com')
//                ->setTo('test.php.up@gmail.com')
//                ->setSubject('Тема сообщения')
//                ->setTextBody('Текст сообщения')
//                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
//                ->send();
//
//        var_dump($result);
//        die;
//    }
//
//}