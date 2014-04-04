<?php
$this->breadcrumbs=array(
	'Examgroups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examgroup','url'=>array('index')),
	array('label'=>'Create Examgroup','url'=>array('create')),
	array('label'=>'View Examgroup','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Examgroup','url'=>array('admin')),
);
?>

<h1>Update Examgroup <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>