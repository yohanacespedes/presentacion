<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdCliente'); ?>
		<?php echo $form->textField($model,'IdCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApellidoPaterno'); ?>
		<?php echo $form->textField($model,'ApellidoPaterno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ApellidoMaterno'); ?>
		<?php echo $form->textField($model,'ApellidoMaterno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ci'); ?>
		<?php echo $form->textField($model,'Ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MZ'); ?>
		<?php echo $form->textField($model,'MZ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UV'); ?>
		<?php echo $form->textField($model,'UV'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nit'); ?>
		<?php echo $form->textField($model,'Nit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->