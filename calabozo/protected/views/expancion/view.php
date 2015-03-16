<?php
/* @var $this ExpancionController */
/* @var $model Expancion */

$this->breadcrumbs=array(
	'Expancions'=>array('index'),
	$model->idExpancion,
);

$this->menu=array(
	array('label'=>'List Expancion', 'url'=>array('index')),
	array('label'=>'Create Expancion', 'url'=>array('create')),
	array('label'=>'Update Expancion', 'url'=>array('update', 'id'=>$model->idExpancion)),
	array('label'=>'Delete Expancion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idExpancion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expancion', 'url'=>array('admin')),
);
?>

<h1>View Expancion #<?php echo $model->idExpancion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idExpancion',
		'perteneceJuego',
		'nombrExpancion',
	),
)); ?>
