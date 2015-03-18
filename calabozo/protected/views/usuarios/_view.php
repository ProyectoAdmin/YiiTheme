<?php
<<<<<<< HEAD
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

=======
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
	<b><?php echo CHtml::encode($data->getAttributeLabel('IDUsuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDUsuarios), array('view', 'id'=>$data->IDUsuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombreUsuario); ?>
	<br />

<<<<<<< HEAD
	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena); ?>
=======
	<b><?php echo CHtml::encode($data->getAttributeLabel('contraseña')); ?>:</b>
	<?php echo CHtml::encode($data->contraseña); ?>
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposDeUsuarios')); ?>:</b>
	<?php echo CHtml::encode($data->tiposDeUsuarios); ?>
	<br />

<<<<<<< HEAD

=======

>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
</div>