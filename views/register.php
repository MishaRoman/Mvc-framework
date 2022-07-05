<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', 'post') ?>
<div class="row">
  <div class="col">
    <?php echo $form->field($user, 'firstname') ?>
  </div>
  <div class="col">
    <?php echo $form->field($user, 'lastname') ?>
  </div>
</div>
<?php echo $form->field($user, 'email') ?>
<?php echo $form->field($user, 'password')->passwordField() ?>
<?php echo $form->field($user, 'confirmPassword')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php \app\core\form\Form::end() ?>