<?php
/* @var $this ExpancionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expancions',
);

$this->menu=array(
	array('label'=>'Create Expancion', 'url'=>array('create')),
	array('label'=>'Manage Expancion', 'url'=>array('admin')),
);
?>

<h1>Expancions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
