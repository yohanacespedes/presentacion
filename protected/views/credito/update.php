<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	$model->IdCredito=>array('view','id'=>$model->IdCredito),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Credito', 'url'=>array('index')),
	array('label'=>'Registrar Credito', 'url'=>array('create')),
	array('label'=>'Ver Credito', 'url'=>array('view', 'id'=>$model->IdCredito)),
	array('label'=>'Administrar Credito', 'url'=>array('admin')),
);
?>

<h1>Update Credito <?php echo $model->IdCredito; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>