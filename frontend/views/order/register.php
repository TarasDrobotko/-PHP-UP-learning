<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Welcome to our company!</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>
    
    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>
    
    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>
    
    <p>Email name:</p>
    <input name="email" type="text" />
    <br><br>
    
    <p>Date of birth:</p>
    <input name="birth" type="text"  />
    
    <br><br>
    
     <p>Date of commencement of work:</p>
    <input name="beginWork" type="text" />
    <br><br>
    
    <p>City:</p>
    <select name="city">
        <option value="0"></option>
        <option value="1">Lutsk</option>
        <option value="2">Lviv</option>
        <option value="3">Kiev</option>
    </select>
    <br><br>
    
    <p>Position:</p>
    <input name="position" type="text" />
    <br><br>
    
    <p>Identification code:</p>
    <input name="identificationCode" type="text" />
    <br><br>
    <input type="submit" />    

</form>