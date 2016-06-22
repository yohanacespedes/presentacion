<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdUsuario), array('view', 'id'=>$data->IdUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IDEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ApellidoMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->ApellidoMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CI')); ?>:</b>
	<?php echo CHtml::encode($data->CI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwok')); ?>:</b>
	<?php echo CHtml::encode($data->passwok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	*/ ?>

</div>