<?php
/* @var $this PagoController */
/* @var $model Pago */

$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Pago', 'url'=>array('index')),
	array('label'=>'Administrar Pago', 'url'=>array('admin')),
);
?>

<h1>Create Pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>