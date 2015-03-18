<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->textField($model,'nombreColeccionable',array('size'=>20,'maxlength'=>25, 'placeholder' => 'Nombre del coleccionable','style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'nombreColeccionable'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownList($model,'juego', CHtml::listData(Juego::model()->findAll(array('order' => 'nombreJuego ASC')), 'idJuego', 'nombreJuego'), array('empty'=>'SELECCIONE UN JUEGO'));?>
		<?php echo $form->error($model,'juego'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownList($model,'expansion', CHtml::listData(Expansion::model()->findAll(array('order' => 'nombreExpansion ASC')), 'idExpansion', 'nombreExpansion'), array('empty'=>'SELECCIONE UNA EXPANSION'));?>
		<?php echo $form->error($model,'expansion'); ?>
	</div>
	
	<div class="row">
		 <?php echo $form->labelEx($model,'imagen'); ?> 
		 <?php echo $form->fileField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?> 
		 <?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'precio',array('placeholder' => 'Precio')); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'piezasEnExistencia',array('placeholder' => 'piezas','style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'piezasEnExistencia'); ?>
	</div>


	<div class="row">
		<?php date_default_timezone_set('America/Mexico_City'); $fecha = Date('d-m-Y'); ?>
		<?php echo $form->textField($model,'fechaDeRegistro',array('value'=>$fecha, 'readonly'=>'false')); ?>
	<?php echo $form->error($model,'fechaDeRegistro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->