<?php
/* @var $this JuegoController */
/* @var $model Juego */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idJuego'); ?>
		<?php echo $form->textField($model,'idJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreJuego'); ?>
		<?php echo $form->textField($model,'nombreJuego',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->