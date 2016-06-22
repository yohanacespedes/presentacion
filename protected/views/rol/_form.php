<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-form',
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
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUs'); ?>
		<?php echo $form->textField($model,'idUs'); ?>
		<?php echo $form->error($model,'idUs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->