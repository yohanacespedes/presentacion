<?php
/* @var $this CreditoController */
/* @var $model Credito */

$this->breadcrumbs=array(
	'Creditos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Credito', 'url'=>array('index')),
	array('label'=>'Registrar Credito', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#credito-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adminsitracion Creditos</h1>

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
	'id'=>'credito-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IdCredito',
		'IDEmpresa',
		'CuotasPagadas',
		'Fecha',
		'Importe',
		'Interes',
		/*
		'Saldo',
		'Estado',
		'idCli',
		'idU',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
