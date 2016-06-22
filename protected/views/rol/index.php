<?php
/* @var $this RolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rols',
);

$this->menu=array(
	array('label'=>'Registrar Rol', 'url'=>array('create')),
	array('label'=>'Administrar Rol', 'url'=>array('admin')),
);
?>

<h1>Rols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
