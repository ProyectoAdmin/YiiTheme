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
		<?php echo $form->textField($model,'nombreColeccionable',array('size'=>25,'maxlength'=>25,'placeholder' => 'Nombre del coleccionable')); ?>
		<?php echo $form->error($model,'nombreColeccionable'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'juego', array( 'placeholder' => 'Juego')); ?>
		<?php echo $form->error($model,'juego'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'expancion', array( 'placeholder' => 'Expancion')); ?>
		<?php echo $form->error($model,'expancion'); ?>
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
		<?php echo $form->textField($model,'piezasEnExistencia',array( 'placeholder' => 'Piezas exixtentes')); ?>
		<?php echo $form->error($model,'piezasEnExistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaDeRegistro'); ?>
		<?php echo $form->textField($model,'fechaDeRegistro',array( 'placeholder' => 'Fecha de registro')); ?>
		<?php echo $form->error($model,'fechaDeRegistro'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
