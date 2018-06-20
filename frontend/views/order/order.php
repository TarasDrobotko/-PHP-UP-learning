<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Order the windows!</h1>

<form method="post">
    <p>Width:</p>
    <input name="width" type="text" />
    <br><br>
    
    <p>Height:</p>
    <input name="height" type="text" />
    <br><br>
    
    <p>Count of cells:</p>
     <input name="cell" type="radio"  value="1"/>1<br>
    <input name="cell" type="radio"  value="2"/>2<br>
    <input name="cell" type="radio"  value="3"/>3<br>
    <br><br>
    
    <p>Count of sashes:</p>
    <input name="sashe" type="text" />
    <br><br>
    
    <p>Count of swing sashes:</p>
    <input name="swingSashe" type="text"  />
    
    <br><br>
    
     <p>Color:</p>
     <select name="color">
         <option value="orange">orange</option>
        <option value="blue">blue</option>
        <option value="red">red</option>
        <option value="black">black</option>
    </select>
    <br><br>
    
    <p>Window sill:</p>
   <input name="windowSill" type="checkbox"  value="yes"/> yes<br>
    <input name="windowSill" type="checkbox"  value="no"/> no<br>
    <br><br>
    
    <p>Your email:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Your name:</p>
    <input name="name" type="text" />
    <br><br>
    <input type="submit" />    

</form>