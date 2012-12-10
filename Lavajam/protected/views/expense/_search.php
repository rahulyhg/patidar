<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_voucher_no'); ?>
		<?php echo $form->textField($model,'expense_voucher_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_date'); ?>
		<?php echo $form->textField($model,'expense_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_master_id'); ?>
		<?php echo $form->textField($model,'expense_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expense_amount'); ?>
		<?php echo $form->textField($model,'expense_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->