<?php 
/* @var $this yii\web\View */
/* @var productList[] frontend\models\Shop; */?>
<h1>Products</h1>

<?php foreach ($productList as $product): ?>
<div class="col-md-10">
    <h3><?php echo $product->product; ?></h3>
    <p><?php echo $product->getDateManufactured(); ?></p>
 <p><?php echo $product->getCategoryName(); ?></p>
 <p><?php echo $product->getManufacturerName(); ?></p>
    
            <hr>
</div>

<?php endforeach; ?>

