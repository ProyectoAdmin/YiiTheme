<section class="maincontent2">

<?php
/* @var $this JuegoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Juegos',
);

$this->menu=array(
	array('label'=>'Create Juego', 'url'=>array('create')),
	array('label'=>'Manage Juego', 'url'=>array('admin')),
);
?>

<h1>Juegos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</section>