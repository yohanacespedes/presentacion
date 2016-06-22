<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdRol'); ?>
		<?php echo $form->textField($model,'IdRol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUs'); ?>
		<?php echo $form->textField($model,'idUs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->