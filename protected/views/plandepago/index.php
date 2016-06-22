<?php
/* @var $this PlandepagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plandepagos',
);

$this->menu=array(
	array('label'=>'Registrar Plandepago', 'url'=>array('create')),
	array('label'=>'Adminsitrar Plandepago', 'url'=>array('admin')),
);
?>

<h1>Plandepagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
