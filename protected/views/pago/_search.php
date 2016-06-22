<?php
/* @var $this PagoController */
/* @var $model Pago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdPago'); ?>
		<?php echo $form->textField($model,'IdPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Importe'); ?>
		<?php echo $form->textField($model,'Importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idCredi'); ?>
		<?php echo $form->textField($model,'idCredi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->