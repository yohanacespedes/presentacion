<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	$model->IdCredito,
);

$this->menu=array(
	array('label'=>'Listar Credito', 'url'=>array('index')),
	array('label'=>'Registrar Credito', 'url'=>array('create')),
	array('label'=>'Actualizar Credito', 'url'=>array('update', 'id'=>$model->IdCredito)),
	array('label'=>'Eliminar Credito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdCredito),'confirmar'=>'Esta seguro que quiere eliminar este item?')),
	array('label'=>'Administrar Credito', 'url'=>array('admin')),
);
?>

<h1>View Credito #<?php echo $model->IdCredito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdCredito',
		'IDEmpresa',
		'CuotasPagadas',
		'Fecha',
		'Importe',
		'Interes',
		'Saldo',
		'Estado',
		'idCli',
		'idU',
	),
)); ?>
