<?php
/* @var $this McUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mc Users',
);

$this->menu=array(
	array('label'=>'Create McUsers', 'url'=>array('create')),
	array('label'=>'Manage McUsers', 'url'=>array('admin')),
);
?>

<h1>Mc Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
