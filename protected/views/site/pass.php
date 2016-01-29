<?php
$this->pageTitle = Yii::app()->name . ' - Відновлення паролю';
$this->breadcrumbs = array(
    'Pass',
);
?>

<h1>Відновлення паролю</h1>

<?php if (Yii::app()->user->hasFlash('sendlink')): ?>

    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('sendlink'); ?>
    </div>

<?php else: ?>



    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'pass-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>



        <?php echo $form->errorSummary($model); ?>


        <div class="row">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email'); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>


    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton('Відправити'); ?>
    </div>

    <?php $this->endWidget(); ?>

    

<?php endif; ?>