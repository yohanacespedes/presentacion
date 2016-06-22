<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->IdRol,
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'Registrar Rol', 'url'=>array('create')),
	array('label'=>'Actualizar Rol', 'url'=>array('update', 'id'=>$model->IdRol)),
	array('label'=>'Eliminar Rol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdRol),'confirmar'=>'esta seguro que quier eliminar este item?')),
	array('label'=>'Administracion Rol', 'url'=>array('admin')),
);
?>

<h1>View Rol #<?php echo $model->IdRol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdRol',
		'IDEmpresa',
		'Descripcion',
		'idUs',
	),
)); ?>
