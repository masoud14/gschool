<?php
$this->breadcrumbs=array(
	'Examgroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examgroup','url'=>array('index')),
	array('label'=>'Manage Examgroup','url'=>array('admin')),
);
?>

<h1>Create Examgroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>