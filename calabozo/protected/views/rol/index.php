<section class="maincontent2">

<?php
/* @var $this RolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rols',
);

$this->menu=array(
	array('label'=>'Create Rol', 'url'=>array('create')),
	array('label'=>'Manage Rol', 'url'=>array('admin')),
);
?>

<h1>Rol</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</section>
