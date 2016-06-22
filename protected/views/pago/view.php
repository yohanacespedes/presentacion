<?php
/* @var $this PagoController */
/* @var $model Pago */

$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	$model->IdPago,
);

$this->menu=array(
	array('label'=>'Listar Pago', 'url'=>array('index')),
	array('label'=>'Registrar Pago', 'url'=>array('create')),
	array('label'=>'Actualizar Pago', 'url'=>array('update', 'id'=>$model->IdPago)),
	array('label'=>'Eliminar Pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdPago),'confirmar'=>'esta se guro que quier eeliminar este ittem item?')),
	array('label'=>'Administracion pago Pago', 'url'=>array('admin')),
);
?>

<h1>View Pago #<?php echo $model->IdPago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdPago',
		'IDEmpresa',
		'Fecha',
		'Importe',
		'Estado',
		'idCredi',
	),
)); ?>
