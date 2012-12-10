<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expense-master-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_name'); ?>
		<?php echo $form->textField($model,'expense_name',array('size'=>24,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'expense_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_group_id'); ?>
		<?php echo $form->dropDownList($model,'expense_group_id',CHtml::listData(ExpenseGroupMaster::model()->findAll(),'id','expense_group_name'),array('empty' => '-------Select Expense Group Name-------')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'expense_group_id'); ?>
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
