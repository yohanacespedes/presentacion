<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */

$this->breadcrumbs=array(
	'Plandepagos'=>array('index'),
	$model->IdPlan=>array('view','id'=>$model->IdPlan),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Plandepago', 'url'=>array('index')),
	array('label'=>'registrar Plandepago', 'url'=>array('create')),
	array('label'=>'Ver Plandepago', 'url'=>array('view', 'id'=>$model->IdPlan)),
	array('label'=>'Adminsitrar Plandepago', 'url'=>array('admin')),
);
?>

<h1>Update Plandepago <?php echo $model->IdPlan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>