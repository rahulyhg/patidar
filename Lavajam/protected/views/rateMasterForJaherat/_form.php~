<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rate-master-for-jaherat-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_page_no'); ?>
		<?php echo $form->textField($model,'rate_page_no',array('size'=>10,'maxlength'=>10)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'rate_page_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_type_color'); ?>
		<?php echo $form->dropdownList($model,'rate_type_color',array(""=>"---------Select---------","2 Color"=>"2 Color","4 Color"=>"4 Color",'Black & White'=>'Black & White')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'rate_type_color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_amount'); ?>
		<?php echo $form->textField($model,'rate_amount',array('size'=>10,'maxlength'=>10)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'rate_amount'); ?>
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
