<?php
/* @var $this ExpansionController */
/* @var $model Expansion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expansion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'nombreExpansion',array('size'=>20,'maxlength'=>15,'placeholder' => 'Nombre de  la Expansión' ,'style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'nombreExpansion'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownList($model,'perteneceJuego', CHtml::listData(Juego::model()->findAll(array('order' => 'nombreJuego ASC')), 'idJuego', 'nombreJuego'), array('empty'=>'SELECCIONE EL JUEGO'));?>
		<?php echo $form->error($model,'perteneceJuego'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar expansión' : 'Guarfar cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->