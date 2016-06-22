<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */

$this->breadcrumbs=array(
	'Plandepagos'=>array('index'),
	$model->IdPlan,
);

$this->menu=array(
	array('label'=>'Listar Plandepago', 'url'=>array('index')),
	array('label'=>'registrar Plandepago', 'url'=>array('create')),
	array('label'=>'Actualizar Plandepago', 'url'=>array('update', 'id'=>$model->IdPlan)),
	array('label'=>'eliminar Plandepago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdPlan),'confirmar'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administracion Plandepago', 'url'=>array('admin')),
);
?>

<h1>View Plandepago #<?php echo $model->IdPlan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdPlan',
		'IDEmpresa',
		'idCred',
		'FechaPago',
		'Importe',
		'Interes',
		'NroCuotas',
		'Total',
	),
)); ?>
