<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batchname')); ?>:</b>
	<?php echo CHtml::encode($data->batchname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearstart')); ?>:</b>
	<?php echo CHtml::encode($data->yearstart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearend')); ?>:</b>
	<?php echo CHtml::encode($data->yearend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::encode($data->course_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isfirst')); ?>:</b>
	<?php echo CHtml::encode($data->isfirst); ?>
	<br />


</div>