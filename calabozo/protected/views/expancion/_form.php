<?php
/* @var $this ExpancionController */
/* @var $model Expancion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expancion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'perteneceJuego'); ?>
		<?php echo $form->textField($model,'perteneceJuego'); ?>
		<?php echo $form->error($model,'perteneceJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombrExpancion'); ?>
		<?php echo $form->textField($model,'nombrExpancion',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombrExpancion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->