<?php 
/* @var $this yii\web\View */
/* @var $shop frontend\models\Shop; */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
      <h1>Add products:</h1>
<?php $form = ActiveForm::begin(); ?>

 <?php echo $form->field($shop, 'product'); ?>
 <?php echo $form->field($shop, 'date_of_manufacture'); ?>
 <?php echo $form->field($shop, 'category_id'); ?>
 <?php echo $form->field($shop, 'manufacturer_id'); ?>
<?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
