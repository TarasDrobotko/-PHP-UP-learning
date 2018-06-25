<?php
/* @var $comments array */
use yii\helpers\Html;

/* @var $model frontend\models\Comments */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<form method="post">
    <p>Name:</p>
    <input name="name" type="text" />
    <br><br>
    
    <p>Email:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Comment:</p>
    <input name="text" type="text" />
    <br><br>
    <input type="submit" />
</form>
<h1>Comments</h1>
<?php foreach ($comments as $comment): ?>
    <?php echo Html::tag('h4', Html::encode($comment['author'])); ?>
    <?php echo Html::tag('p', Html::encode($comment['text'])); ?>
    <hr/>
<?php endforeach;

    


