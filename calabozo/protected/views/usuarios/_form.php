<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>15,'maxlength'=>10,'placeholder' => 'Nombre de Usuario','style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'nombreUsuario'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activePasswordField($model,'contrasena',array('size'=>15,'maxlength'=>15,'placeholder' => 'CONTRASEÑA')) ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownList($model,'tiposDeUsuarios', CHtml::listData(Rol::model()->findAll(array('order' => 'rol ASC')), 'idJuego', 'rol'), array('empty'=>'SELECCIONE UN ROL'));?>
		<?php echo $form->error($model,'tiposDeUsuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Usuario' : 'Guardar cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->