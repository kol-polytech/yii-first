<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>

<div class="row">
    <?php echo $form->labelEx($modelForm, 'password'); ?>
    <?php echo $form->passwordField($modelForm, 'password'); ?>
    <?php echo $form->error($modelForm, 'password'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($modelForm, 'password_repeat'); ?>
    <?php echo $form->passwordField($modelForm, 'password_repeat'); ?>
    <?php echo $form->error($modelForm, 'password_repeat'); ?>
</div>
<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Змінити пароль' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

