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
		<?php echo $form->label($model,'bill_no_of_jaherat'); ?>
		<?php echo $form->textField($model,'bill_no_of_jaherat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bill_date_of_jaherat'); ?>
		<?php echo $form->textField($model,'bill_date_of_jaherat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'party_no'); ?>
		<?php echo $form->textField($model,'party_no'); ?>
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