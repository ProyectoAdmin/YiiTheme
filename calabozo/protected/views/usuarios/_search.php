<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDUsuarios'); ?>
		<?php echo $form->textField($model,'IDUsuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreUsuario'); ?>
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
<<<<<<< HEAD
		<?php echo $form->label($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>15,'maxlength'=>15)); ?>
=======
		<?php echo $form->label($model,'contraseña'); ?>
		<?php echo $form->textField($model,'contraseña',array('size'=>15,'maxlength'=>15)); ?>
>>>>>>> cf7eb53e7662c9e2b2cfbeaa9620eabf4e791af0
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposDeUsuarios'); ?>
		<?php echo $form->textField($model,'tiposDeUsuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->