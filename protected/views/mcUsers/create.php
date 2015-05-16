<?php
/* @var $this McUsersController */
/* @var $model McUsers */

$this->breadcrumbs=array(
	'Mc Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List McUsers', 'url'=>array('index')),
	array('label'=>'Manage McUsers', 'url'=>array('admin')),
);
?>

<h1>Create McUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>