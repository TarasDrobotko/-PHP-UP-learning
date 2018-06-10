<?php 
use yii\helpers\Url;

foreach ($list as $item): ?>

<h1>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id'=> $item['id']]); ?>">
        <?php echo $item['title']; ?>
    </a>
</h1>
<p><?php echo $item['content']; ?></p>
<hr>
<?php foreach ($listByWords as $item1): ?>
<?php if ($item1['id'] == $item['id']):  ?>
<p><?php echo $item1['content']; ?></p>
<?php endif; ?>
<?php endforeach;?>
<hr>
    
<?php endforeach;?>
<a href="<?php echo Url::to(['count/index']); ?>" class="btn btn-info">Count of news</a>


