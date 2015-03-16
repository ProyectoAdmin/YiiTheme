<?php
/* @var $this ExpancionController */
/* @var $model Expancion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idExpancion'); ?>
		<?php echo $form->textField($model,'idExpancion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perteneceJuego'); ?>
		<?php echo $form->textField($model,'perteneceJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrExpancion'); ?>
		<?php echo $form->textField($model,'nombrExpancion',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->