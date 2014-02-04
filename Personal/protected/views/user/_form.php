<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<!-- 
	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid'); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'First Name'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Middle Initial'); ?>
		<?php echo $form->textField($model,'mi',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Last Name'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email Address'); ?>
		<?php echo $form->textField($model,'emailadd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailadd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->