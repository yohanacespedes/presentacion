<?php
/* @var $this PagoController */
/* @var $model Pago */

$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	$model->IdPago=>array('view','id'=>$model->IdPago),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Pago', 'url'=>array('index')),
	array('label'=>'registrar Pago', 'url'=>array('create')),
	array('label'=>'Ver Pago', 'url'=>array('view', 'id'=>$model->IdPago)),
	array('label'=>'Administrar Pago', 'url'=>array('admin')),
);
?>

<h1>Update Pago <?php echo $model->IdPago; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>