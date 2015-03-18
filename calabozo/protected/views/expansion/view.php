<?php
/* @var $this ExpansionController */
/* @var $model Expansion */

$this->breadcrumbs=array(
	'Expansions'=>array('index'),
	$model->idExpansion,
);

$this->menu=array(
	array('label'=>'List Expansion', 'url'=>array('index')),
	array('label'=>'Create Expansion', 'url'=>array('create')),
	array('label'=>'Update Expansion', 'url'=>array('update', 'id'=>$model->idExpansion)),
	array('label'=>'Delete Expansion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idExpansion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expansion', 'url'=>array('admin')),
);
?>

<h1>View Expansion #<?php echo $model->idExpansion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idExpansion',
		'perteneceJuego',
		'nombreExpansion',
	),
)); ?>
