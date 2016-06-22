<?php
/* @var $this PlandepagoController */
/* @var $model Plandepago */

$this->breadcrumbs=array(
	'Plandepagos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Plandepago', 'url'=>array('index')),
	array('label'=>'Registrar Plandepago', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#plandepago-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Plandepagos</h1>

<p>
puede introducir opcionalmente un operador de comparacion(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)al comienzo de cada uno de los valores de busqueda para especificar la forma en la comparacion debe hacerce
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'plandepago-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IdPlan',
		'IDEmpresa',
		'idCred',
		'FechaPago',
		'Importe',
		'Interes',
		/*
		'NroCuotas',
		'Total',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
