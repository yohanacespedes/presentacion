<?php
/* @var $this CreditoController */
/* @var $model Credito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'credito-form',
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
		<?php echo $form->labelEx($model,'CuotasPagadas'); ?>
		<?php echo $form->textField($model,'CuotasPagadas'); ?>
		<?php echo $form->error($model,'CuotasPagadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Fecha'); ?>
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
		<?php echo $form->labelEx($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
		<?php echo $form->error($model,'Saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCli'); ?>
		<?php echo $form->textField($model,'idCli'); ?>
		<?php echo $form->error($model,'idCli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idU'); ?>
		<?php echo $form->textField($model,'idU'); ?>
		<?php echo $form->error($model,'idU'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->