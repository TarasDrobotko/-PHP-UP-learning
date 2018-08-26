<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use frontend\models\Comments;

/**
 * @author Admin
 */
class CommentsController extends Controller {

    public function actionIndex() {
        $model = new Comments();
        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            //print_r($model->attributes);die;
            if ($model->validate()) {
                 $model->save();
                Yii::$app->session->setFlash('success', 'Comment has been added!');
            }
        }

        $comments = Comments::find();

        return $this->render('index', [
                    'comments' => $comments, 'model' => $model,
        ]);
    }

}
