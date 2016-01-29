<?php
$this->breadcrumbs = array(
    'Articles' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Article', 'url' => array('index')),
    array('label' => 'Create Article', 'url' => array('create')),
    array('label' => 'Update Article', 'url' => array('update', 'id' => $model->id)),
);
?>

<h1>View Article #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'user_id',
        'title',
        'content',
        'author' => array(
            'label' => 'Автор',
            'value' => $model->author->username
        )
    ),
));
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelComment); ?>

	<div class="row">
		<?php echo $form->labelEx($modelComment,'username'); ?>
		<?php echo $form->textField($modelComment,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($modelComment,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelComment,'content'); ?>
		<?php echo $form->textArea($modelComment,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelComment,'content'); ?>
	</div>
        
      

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

<div>
    <?php foreach ($model->comments as $key => $value): ?>
        <div class="view">
            <h2>
            <?php echo $value->username; ?>
            </h2>
            <?php echo $value->content; ?>
        </div>
    <?php endforeach; ?>
</div>