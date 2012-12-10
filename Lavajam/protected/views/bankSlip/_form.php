<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bank-slip-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'slip_no'); ?>
		<?php echo $form->textField($model,'slip_no',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'slip_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_id'); ?>          
		 <?php echo $form->dropDownList($model,'member_id',MemberMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
