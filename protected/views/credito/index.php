<?php
/* @var $this CreditoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Creditos',
);

$this->menu=array(
	array('label'=>'Registrar Credito', 'url'=>array('create')),
	array('label'=>'Administrar Credito', 'url'=>array('admin')),
);
?>

<h1>Creditos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
