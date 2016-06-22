<?php
/* @var $this PagoController */
/* @var $data Pago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdPago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdPago), array('view', 'id'=>$data->IdPago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IDEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Importe')); ?>:</b>
	<?php echo CHtml::encode($data->Importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCredi')); ?>:</b>
	<?php echo CHtml::encode($data->idCredi); ?>
	<br />


</div>