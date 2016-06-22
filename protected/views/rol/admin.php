<?php
/* @var $this RolController */
/* @var $model Rol */

$this->breadcrumbs=array(
	'Rols'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Rol', 'url'=>array('index')),
	array('label'=>'Registrar Rol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rol-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Rols</h1>

<p>
puedes introducir opcionalmente un operador de comparacion(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)al comienzo de cada uno de los valores de busqueda para especificar la forma en la comparacion debe hacerce
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rol-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IdRol',
		'IDEmpresa',
		'Descripcion',
		'idUs',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
