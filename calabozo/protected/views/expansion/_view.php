<?php
/* @var $this ExpansionController */
/* @var $data Expansion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idExpansion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idExpansion), array('view', 'id'=>$data->idExpansion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceJuego')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreExpansion')); ?>:</b>
	<?php echo CHtml::encode($data->nombreExpansion); ?>
	<br />


</div>