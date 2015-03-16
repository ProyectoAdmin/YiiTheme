<?php
/* @var $this JuegoController */
/* @var $data Juego */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJuego')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idJuego), array('view', 'id'=>$data->idJuego)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreJuego')); ?>:</b>
	<?php echo CHtml::encode($data->nombreJuego); ?>
	<br />


</div>