<?php
$this->breadcrumbs=array(
	'Examgroups',
);

$this->menu=array(
	array('label'=>'Create Examgroup','url'=>array('create')),
	array('label'=>'Manage Examgroup','url'=>array('admin')),
);
?>

<h1>Examgroups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
