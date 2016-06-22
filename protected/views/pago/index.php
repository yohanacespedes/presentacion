<?php
/* @var $this PagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagos',
);

$this->menu=array(
	array('label'=>'Registrar Pago', 'url'=>array('create')),
	array('label'=>'Administrar Pago', 'url'=>array('admin')),
);
?>

<h1>Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
