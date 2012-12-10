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
		<?php echo $form->label($model,'receipt_no'); ?>
		<?php echo $form->textField($model,'receipt_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receipt_date'); ?>
		<?php echo $form->textField($model,'receipt_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bill_no_of_avasan'); ?>
		<?php echo $form->textField($model,'bill_no_of_avasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bill_date_of_avasan'); ?>
		<?php echo $form->textField($model,'bill_date_of_avasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'party_no'); ?>
		<?php echo $form->textField($model,'party_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_master_id'); ?>
		<?php echo $form->textField($model,'bank_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cheque_dd_no'); ?>
		<?php echo $form->textField($model,'cheque_dd_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_type'); ?>
		<?php echo $form->textField($model,'payment_type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->