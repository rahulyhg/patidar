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
		<?php echo $form->label($model,'member_no'); ?>
		<?php echo $form->textField($model,'member_no'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'ausan_name'); ?>
		<?php echo $form->textField($model,'ausan_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ausan_sender_name'); ?>
		<?php echo $form->textField($model,'ausan_sender_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ausan_sender_address'); ?>
		<?php echo $form->textField($model,'ausan_sender_address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ausan_date'); ?>
		<?php echo $form->textField($model,'ausan_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ausan_no_of_picture'); ?>
		<?php echo $form->textField($model,'ausan_no_of_picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ausan_total_amount'); ?>
		<?php echo $form->textField($model,'ausan_total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_by'); ?>
		<?php echo $form->textField($model,'creation_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
