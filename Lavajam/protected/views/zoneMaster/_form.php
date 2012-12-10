<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zone-master-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'zone_number'); ?>
		<?php echo $form->textField($model,'zone_number',array('size'=>10,'maxlength'=>10)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'zone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zone_name'); ?>
		<?php echo $form->textField($model,'zone_name',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'zone_name'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
		<?php echo $form->error($model,'creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
