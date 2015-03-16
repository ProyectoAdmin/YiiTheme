<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDProducto'); ?>
		<?php echo $form->textField($model,'IDProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreColeccionable'); ?>
		<?php echo $form->textField($model,'nombreColeccionable',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'juego'); ?>
		<?php echo $form->textField($model,'juego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expancion'); ?>
		<?php echo $form->textField($model,'expancion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piezasEnExistencia'); ?>
		<?php echo $form->textField($model,'piezasEnExistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaDeRegistro'); ?>
		<?php echo $form->textField($model,'fechaDeRegistro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->