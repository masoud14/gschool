<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'batch-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'batchname', array('class' => 'span5', 'maxlength' => 45)); ?>


<?php
echo $form->datepickerRow(
        $model, 'yearstart', array('options' => array('language' => 'en')), array(
            'prepend' => '<i class="icon-calendar"></i>'
        )
);
?>


<?php 
echo $form->datepickerRow(
        $model, 'yearend', array('options' => array('language' => 'en')), array(
            'prepend' => '<i class="icon-calendar"></i>'
        )
);
?>

<?php echo $form->textFieldRow($model, 'course_id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'isfirst', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
