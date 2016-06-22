<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdPlan'); ?>
		<?php echo $form->textField($model,'IdPlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCred'); ?>
		<?php echo $form->textField($model,'idCred'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaPago'); ?>
		<?php echo $form->textField($model,'FechaPago',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'NroCuotas'); ?>
		<?php echo $form->textField($model,'NroCuotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Total'); ?>
		<?php echo $form->textField($model,'Total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->