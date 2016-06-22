<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Cliente', 'url'=>array('index')),
	array('label'=>'Administracion Cliente', 'url'=>array('admin')),
);
?>

<h1>Create Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>