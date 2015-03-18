<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->IDUsuarios,
<<<<<<< HEAD
);
=======
);
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->IDUsuarios)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDUsuarios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->IDUsuarios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
<<<<<<< HEAD
		'IDUsuarios',
		'nombreUsuario',
		'contrasena',
		'tiposDeUsuarios',
=======
		'IDUsuarios',
		'nombreUsuario',
		'contraseña',
		'tiposDeUsuarios',
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
	),
)); ?>
