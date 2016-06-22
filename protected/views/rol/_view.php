<?php
/* @var $this RolController */
/* @var $data Rol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdRol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdRol), array('view', 'id'=>$data->IdRol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IDEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUs')); ?>:</b>
	<?php echo CHtml::encode($data->idUs); ?>
	<br />


</div>