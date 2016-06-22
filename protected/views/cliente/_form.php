<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
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
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApellidoPaterno'); ?>
		<?php echo $form->textField($model,'ApellidoPaterno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ApellidoPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ApellidoMaterno'); ?>
		<?php echo $form->textField($model,'ApellidoMaterno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ApellidoMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ci'); ?>
		<?php echo $form->textField($model,'Ci'); ?>
		<?php echo $form->error($model,'Ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono'); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MZ'); ?>
		<?php echo $form->textField($model,'MZ'); ?>
		<?php echo $form->error($model,'MZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UV'); ?>
		<?php echo $form->textField($model,'UV'); ?>
		<?php echo $form->error($model,'UV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit'); ?>
		<?php echo $form->error($model,'Nit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->