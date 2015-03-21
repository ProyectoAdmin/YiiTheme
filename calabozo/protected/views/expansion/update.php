<section class="maincontent2">

<?php
/* @var $this ExpansionController */
/* @var $model Expansion */

$this->breadcrumbs=array(
	'Expansions'=>array('index'),
	$model->idExpansion=>array('view','id'=>$model->idExpansion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Expansion', 'url'=>array('index')),
	array('label'=>'Create Expansion', 'url'=>array('create')),
	array('label'=>'View Expansion', 'url'=>array('view', 'id'=>$model->idExpansion)),
	array('label'=>'Manage Expansion', 'url'=>array('admin')),
);
?>

<h1>Update Expansion <?php echo $model->idExpansion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>