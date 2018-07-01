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
        Yii::$app->request->post();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        if ($model->load(Yii::$app->request->post())) { 

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
       return $this->render('register', ['model' => $model,]); 
    }
    
     public function actionUpdate() {
           $model = new Employee();
        
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        if ($model->load(Yii::$app->request->post())) { 
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Data updated!');
            }
        }
       return $this->render('update', ['model' => $model,]); 

    }
}
