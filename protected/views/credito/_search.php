<?php
/* @var $this CreditoController */
/* @var $model Credito */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdCredito'); ?>
		<?php echo $form->textField($model,'IdCredito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuotasPagadas'); ?>
		<?php echo $form->textField($model,'CuotasPagadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Importe'); ?>
		<?php echo $form->textField($model,'Importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Interes'); ?>
		<?php echo $form->textField($model,'Interes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Saldo'); ?>
		<?php echo $form->textField($model,'Saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCli'); ?>
		<?php echo $form->textField($model,'idCli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idU'); ?>
		<?php echo $form->textField($model,'idU'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->