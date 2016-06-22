<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div >
		<?php echo $form->labelEx($model,'IDEmpresa'); ?>
		<?php echo $form->textField($model,'IDEmpresa'); ?>
		<?php echo $form->error($model,'IDEmpresa'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ApellidoPaterno'); ?>
		<?php echo $form->textField($model,'ApellidoPaterno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ApellidoPaterno'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'ApellidoMaterno'); ?>
		<?php echo $form->textField($model,'ApellidoMaterno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ApellidoMaterno'); ?>
	</div>

	<div ">
		<?php echo $form->labelEx($model,'CI'); ?>
		<?php echo $form->textField($model,'CI'); ?>
		<?php echo $form->error($model,'CI'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono'); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'passwok'); ?>
		<?php echo $form->textField($model,'passwok',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'passwok'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado'); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->