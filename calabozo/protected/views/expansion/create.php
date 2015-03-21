<section class="maincontent2">

<?php
/* @var $this ExpansionController */
/* @var $model Expansion */

$this->breadcrumbs=array(
	'Expansions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Expansion', 'url'=>array('index')),
	array('label'=>'Manage Expansion', 'url'=>array('admin')),
);
?>

<h1>Create Expansion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>