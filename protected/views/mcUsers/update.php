<?php
/* @var $this McUsersController */
/* @var $model McUsers */

$this->breadcrumbs=array(
	'Mc Users'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List McUsers', 'url'=>array('index')),
	array('label'=>'Create McUsers', 'url'=>array('create')),
	array('label'=>'View McUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage McUsers', 'url'=>array('admin')),
);
?>

<h1>Update McUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>