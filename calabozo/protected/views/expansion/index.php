<section class="maincontent2">

<?php
/* @var $this ExpansionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expansions',
);

$this->menu=array(
	array('label'=>'Create Expansion', 'url'=>array('create')),
	array('label'=>'Manage Expansion', 'url'=>array('admin')),
);
?>

<h1>Expansions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</section>