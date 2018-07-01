<?php


/* @var $this yii\web\View */
/* @var $shop frontend\models\Shop; */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
      <h1>Add categories:</h1>
<?php $form = ActiveForm::begin(); ?>

 <?php echo $form->field($categories, 'category_name'); ?>
<?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
