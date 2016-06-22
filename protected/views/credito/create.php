<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Credito', 'url'=>array('index')),
	array('label'=>'Adminsitrar Credito', 'url'=>array('admin')),
);
?>

<h1>Create Credito</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>