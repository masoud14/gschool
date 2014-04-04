<?php
$this->breadcrumbs=array(
	'Examgroups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Examgroup','url'=>array('index')),
	array('label'=>'Create Examgroup','url'=>array('create')),
	array('label'=>'Update Examgroup','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Examgroup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examgroup','url'=>array('admin')),
);
?>

<h1>View Examgroup #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
