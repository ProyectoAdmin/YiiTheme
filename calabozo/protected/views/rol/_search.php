<?php
/* @var $this RolController */
/* @var $model Rol */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRol'); ?>
		<?php echo $form->textField($model,'idRol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rol'); ?>
		<?php echo $form->textField($model,'rol',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->