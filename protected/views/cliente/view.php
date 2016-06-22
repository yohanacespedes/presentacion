<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->IdCliente,
);

$this->menu=array(
	array('label'=>'Lista Cliente', 'url'=>array('index')),
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->IdCliente)),
	array('label'=>'Eliminar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdCliente),'confirmar'=>'estas seguro que quieres eliminar este item?')),
	array('label'=>'Administracion Cliente', 'url'=>array('admin')),
);
?>

<h1>View Cliente #<?php echo $model->IdCliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdCliente',
		'IDEmpresa',
		'Nombre',
		'ApellidoPaterno',
		'ApellidoMaterno',
		'Ci',
		'Direccion',
		'Telefono',
		'MZ',
		'UV',
		'Nit',
	),
)); ?>
