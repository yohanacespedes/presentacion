<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */

$this->breadcrumbs=array(
	'Plandepagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Plandepago', 'url'=>array('index')),
	array('label'=>'Adminsitrar Plandepago', 'url'=>array('admin')),
);
?>

<h1>Create Plandepago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>