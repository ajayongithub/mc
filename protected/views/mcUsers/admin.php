<?php
/* @var $this McUsersController */
/* @var $model McUsers */

$this->breadcrumbs=array(
	'Mc Users'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List McUsers', 'url'=>array('index')),
//	array('label'=>'Create McUsers', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mc-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Master Card Users</h1>


<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
//$this->renderPartial('_search',array( 'model'=>$model,));
 ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mc-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'title',
		'fname',
		'lname',
		'email',
		'allow',
		'at_time',
		/*
		'remarks',
		*/
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
