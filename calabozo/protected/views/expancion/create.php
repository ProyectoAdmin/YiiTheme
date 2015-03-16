<?php
/* @var $this ExpancionController */
/* @var $model Expancion */

$this->breadcrumbs=array(
	'Expancions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Expancion', 'url'=>array('index')),
	array('label'=>'Manage Expancion', 'url'=>array('admin')),
);
?>

<h1>Create Expancion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>