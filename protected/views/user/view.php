<?php
$this->pageTitle = Yii::app()->name . " - Ви успішно зареєструвались";
?>
<h1>Вітаємо, <span class="hell"><?php echo $model->username; ?></span>, ви успішно зареєструвалися на сайті :)</h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'username',
        'email',
        'password',
    ),
));
?>