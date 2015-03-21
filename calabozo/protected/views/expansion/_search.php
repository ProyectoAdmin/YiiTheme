<?php
/* @var $this ExpansionController */
/* @var $model Expansion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idExpansion'); ?>
		<?php echo $form->textField($model,'idExpansion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceJuego'); ?>
		<?php echo $form->textField($model,'perteneceJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreExpansion'); ?>
		<?php echo $form->textField($model,'nombreExpansion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->