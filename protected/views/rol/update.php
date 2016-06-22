<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	$model->IdRol=>array('view','id'=>$model->IdRol),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'registrar Rol', 'url'=>array('create')),
	array('label'=>'Ver Rol', 'url'=>array('view', 'id'=>$model->IdRol)),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>Update Rol <?php echo $model->IdRol; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>