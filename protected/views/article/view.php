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
