<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDProducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDProducto), array('view', 'id'=>$data->IDProducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreColeccionable')); ?>:</b>
	<?php echo CHtml::encode($data->nombreColeccionable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('juego')); ?>:</b>
	<?php echo CHtml::encode($data->juego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expansion')); ?>:</b>
	<?php echo CHtml::encode($data->expansion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piezasEnExistencia')); ?>:</b>
	<?php echo CHtml::encode($data->piezasEnExistencia); ?>
	<br />

	<?php /*
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaImagen')); ?>:</b>
	<?php echo CHtml::encode($data->rutaImagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDeRegistro')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDeRegistro); ?>
	<br />

	*/ ?>

</div>