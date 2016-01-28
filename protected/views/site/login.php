<?php
$this->pageTitle = Yii::app()->name . ' - Login';
?>

<h1>Авторизація</h1>


<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note">Поля з<span class="required">*</span> є обов'язковими.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
        <p class="hint">
            Здійснити вхід можуть лише зареєстровані користувачі.
        </p>
    </div>



    <div class="row rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row">

        <?php echo CHtml::link('Забули пароль?', '?r=site/pass'); ?>

    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Вхід'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
