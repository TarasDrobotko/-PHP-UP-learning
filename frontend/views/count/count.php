<?php
use yii\helpers\Url;
?>
<h1>Count of news:</h1>
<p><?php echo $count[0]['count']; ?></p>

<a href="<?php echo Url::to(['test/index']); ?>" class="btn btn-info">Back</a>
