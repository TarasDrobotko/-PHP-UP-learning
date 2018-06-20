<?php
/* @var $model frontend\models\example\ExampleValidation */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Test</h1>

<form method="post">
<!--    <p>Site: </p>
    <input name="siteAddress" type="text" />-->
<!--    <p>Start value:</p>
    <input name="startValue" type="text" />
    <br><br>
    
     <p>End value:</p>
    <input name="endValue" type="text" />-->
    
    <p><input name="options[]" type="checkbox" value="1" /> Wifi:</p>
    <br>
    
    <p><input name="options[]" type="checkbox" value="2" /> Big window:</p>
    <br>
    
    <p><input name="options[]" type="checkbox" value="3" /> Ice cream:</p>
    <br><br>

    <input type="submit" />    

</form>