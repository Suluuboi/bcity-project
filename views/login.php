<?php

/** @var $model \app\models\LoginForm */

use suluuboi\phpmvc\form\Form;

?>

<h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <div class="row">
        <div class="col"><button class="btn btn-success">Submit</button></div class='col'>
        <div ><a href="/">back home</a></div>
    </div>
<?php Form::end() ?>