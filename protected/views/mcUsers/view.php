<?php
/* @var $this McUsersController */
/* @var $model McUsers */

$this->breadcrumbs=array(
	'Mc Users'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List McUsers', 'url'=>array('index')),
	array('label'=>'Create McUsers', 'url'=>array('create')),
	array('label'=>'Update McUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete McUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage McUsers', 'url'=>array('admin')),
);
?>

<h1>View McUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'fname',
		'lname',
		'email',
		'at_time',
		'remarks',
	),
)); ?>
