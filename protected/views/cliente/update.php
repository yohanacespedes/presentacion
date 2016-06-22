<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->IdCliente=>array('view','id'=>$model->IdCliente),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Cliente', 'url'=>array('index')),
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->IdCliente)),
	array('label'=>'Administracion Cliente', 'url'=>array('admin')),
);
?>

<h1>Update Cliente <?php echo $model->IdCliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>