<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rol-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'rol',array('size'=>15,'maxlength'=>15,'placeholder'=>'Rol', 'style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'rol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar juego' : 'Guardar cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->