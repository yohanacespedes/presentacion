<?php
/* @var $this CreditoController */
/* @var $data Credito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdCredito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdCredito), array('view', 'id'=>$data->IdCredito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IDEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuotasPagadas')); ?>:</b>
	<?php echo CHtml::encode($data->CuotasPagadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Importe')); ?>:</b>
	<?php echo CHtml::encode($data->Importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Interes')); ?>:</b>
	<?php echo CHtml::encode($data->Interes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Saldo')); ?>:</b>
	<?php echo CHtml::encode($data->Saldo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCli')); ?>:</b>
	<?php echo CHtml::encode($data->idCli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idU')); ?>:</b>
	<?php echo CHtml::encode($data->idU); ?>
	<br />

	*/ ?>

</div>