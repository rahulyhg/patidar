<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party-master-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'party_name'); ?>
		<?php echo $form->textField($model,'party_name',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'party_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_address_1'); ?>
		<?php echo $form->textField($model,'party_address_1',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'party_address_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_address_2'); ?>
		<?php echo $form->textField($model,'party_address_2',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'party_address_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_address_3'); ?>
		<?php echo $form->textField($model,'party_address_3',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'party_address_3'); ?>
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
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
