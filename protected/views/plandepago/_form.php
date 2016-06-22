<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plandepago-form',
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
		<?php echo $form->labelEx($model,'idCred'); ?>
		<?php echo $form->textField($model,'idCred'); ?>
		<?php echo $form->error($model,'idCred'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaPago'); ?>
		<?php echo $form->textField($model,'FechaPago',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Importe'); ?>
		<?php echo $form->textField($model,'Importe'); ?>
		<?php echo $form->error($model,'Importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Interes'); ?>
		<?php echo $form->textField($model,'Interes'); ?>
		<?php echo $form->error($model,'Interes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NroCuotas'); ?>
		<?php echo $form->textField($model,'NroCuotas'); ?>
		<?php echo $form->error($model,'NroCuotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
		<?php echo $form->error($model,'Total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->