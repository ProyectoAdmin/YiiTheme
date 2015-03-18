<?php
/* @var $this ExpancionController */
/* @var $data Expancion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idExpancion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idExpancion), array('view', 'id'=>$data->idExpancion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perteneceJuego')); ?>:</b>
	<?php echo CHtml::encode($data->perteneceJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrExpancion')); ?>:</b>
	<?php echo CHtml::encode($data->nombrExpancion); ?>
	<br />


</div>