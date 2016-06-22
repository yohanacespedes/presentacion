<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdCliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdCliente), array('view', 'id'=>$data->IdCliente)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ci')); ?>:</b>
	<?php echo CHtml::encode($data->Ci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MZ')); ?>:</b>
	<?php echo CHtml::encode($data->MZ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UV')); ?>:</b>
	<?php echo CHtml::encode($data->UV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nit')); ?>:</b>
	<?php echo CHtml::encode($data->Nit); ?>
	<br />

	*/ ?>

</div>