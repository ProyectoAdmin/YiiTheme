<?php
/* @var $this ExpancionController */
/* @var $model Expancion */

$this->breadcrumbs=array(
	'Expancions'=>array('index'),
	$model->idExpancion=>array('view','id'=>$model->idExpancion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Expancion', 'url'=>array('index')),
	array('label'=>'Create Expancion', 'url'=>array('create')),
	array('label'=>'View Expancion', 'url'=>array('view', 'id'=>$model->idExpancion)),
	array('label'=>'Manage Expancion', 'url'=>array('admin')),
);
?>

<h1>Update Expancion <?php echo $model->idExpancion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>