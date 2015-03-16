<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDUsuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDUsuarios), array('view', 'id'=>$data->IDUsuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombreUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contraseña')); ?>:</b>
	<?php echo CHtml::encode($data->contraseña); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposDeUsuarios')); ?>:</b>
	<?php echo CHtml::encode($data->tiposDeUsuarios); ?>
	<br />


</div>