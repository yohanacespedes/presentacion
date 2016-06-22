<?php
/* @var $this PlandepagoController */
/* @var $data Plandepago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdPlan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdPlan), array('view', 'id'=>$data->IdPlan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDEmpresa')); ?>:</b>
	<?php echo CHtml::encode($data->IDEmpresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCred')); ?>:</b>
	<?php echo CHtml::encode($data->idCred); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaPago')); ?>:</b>
	<?php echo CHtml::encode($data->FechaPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Importe')); ?>:</b>
	<?php echo CHtml::encode($data->Importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Interes')); ?>:</b>
	<?php echo CHtml::encode($data->Interes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NroCuotas')); ?>:</b>
	<?php echo CHtml::encode($data->NroCuotas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Total')); ?>:</b>
	<?php echo CHtml::encode($data->Total); ?>
	<br />

	*/ ?>

</div>