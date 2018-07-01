<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * @author admin
 */
class DaoController extends Controller
{

    public function actionIndex()
    {
        //#1
       $sql1 = 'SELECT COUNT(*) as count FROM news;'; 
       $result1 = Yii::$app->db->createCommand($sql1)->queryScalar();
          echo '<pre>';
         var_dump($result1);
          echo '<pre>';die;
          
          echo '<hr>';
        
           //#2
//       $sql2 = 'SELECT * FROM test;'; 
//       $result2 = Yii::$app->db2->createCommand($sql2)->queryAll();
//          echo '<pre>';
//         var_dump($result2);
//          echo '<pre>';
          
//        $db = new \yii\db\Connection ([
//            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
//           'username' => 'yii2user',
//            'password' => '111111',
//            'charset' => 'utf8',
//                ]);
                
//          $command = new \yii\db\Command ([
//            'db' => $db,
//            'sql' => $sql,
//          ]);
//        $sql1 = 'DELETE FROM news WHERE id = 3;';
//        $result1 = Yii::$app->db->createCommand($sql1)->execute();
//        echo '<pre>';
//        var_dump($result1);
//        echo '<pre>';die;
       // echo '<pre>';
//          $arrayWithResults = $command->queryAll();
//        var_dump($arrayWithResults);
       // echo '<pre>';
      return $this->render('index');
    }

}
