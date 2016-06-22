<?php
/* @var $this PagoController */
/* @var $model Pago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
		<?php echo $form->error($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Importe'); ?>
		<?php echo $form->textField($model,'Importe'); ?>
		<?php echo $form->error($model,'Importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCredi'); ?>
		<?php echo $form->textField($model,'idCredi'); ?>
		<?php echo $form->error($model,'idCredi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->