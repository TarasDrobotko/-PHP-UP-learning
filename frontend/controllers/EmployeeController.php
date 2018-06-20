<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\animal;
use frontend\models\example\human;
/**
 * Description of EmployeeController
 *
 * @author Admin
 */
class EmployeeController extends Controller {
    public function actionIndex() {
        
    }
    
   public function actionTest() {
        
    }  
    
     public function actionRegister() {
         $model = new Employee();
         $formData = Yii::$app->request->post();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        if (Yii::$app->request->isPost) { 
//            if(($formData['birth']=='')) {$formData['birth'] = 'null'; }
//             echo '<pre>';
//                print_r($formData);
//                echo '<pre>';die;
           $model->attributes = $formData;
//            echo '<pre>';
//                print_r($model->attributes);
//                echo '<pre>';die;
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
       return $this->render('register', ['model' => $model,]); 
    }
    
     public function actionUpdate() {
           $model = new Employee();
         $formData = Yii::$app->request->post();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        $model->attributes = $formData;
        
        if (Yii::$app->request->isPost) { 
          $model->attributes = $formData;
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Data updated!');
            }
        }
       return $this->render('update', ['model' => $model,]); 

    }
}
