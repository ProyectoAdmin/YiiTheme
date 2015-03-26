<section class="maincontent2">

<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->IDProducto=>array('view','id'=>$model->IDProducto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Create Producto', 'url'=>array('create')),
	array('label'=>'View Producto', 'url'=>array('view', 'id'=>$model->IDProducto)),
	array('label'=>'Create PDF', 'url'=>array('pdf')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>Update Producto <?php echo $model->IDProducto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>
