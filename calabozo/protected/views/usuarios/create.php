<section class="maincontent2">

<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>Create Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</section>
