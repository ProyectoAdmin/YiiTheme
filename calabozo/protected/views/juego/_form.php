<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
/* @var $this JuegoController */
/* @var $model Juego */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'juego-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
<<<<<<< HEAD
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'nombreJuego',array('size'=>15,'maxlength'=>30,'placeholder' => 'Nombre del juego','style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'nombreJuego'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar juego' : 'Guardar cambios'); ?>
	</div>

<?php $this->endWidget(); ?>
=======
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreJuego'); ?>
		<?php echo $form->textField($model,'nombreJuego',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombreJuego'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0

</div><!-- form -->