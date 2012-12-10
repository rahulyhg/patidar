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
		<?php echo $form->label($model,'lavajam_page_no'); ?>
		<?php echo $form->textField($model,'lavajam_page_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lavajam_date'); ?>
		<?php echo $form->textField($model,'lavajam_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lavajam_no_of'); ?>
		<?php echo $form->textField($model,'lavajam_no_of'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lavajam_amount'); ?>
		<?php echo $form->textField($model,'lavajam_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lavajam_no_from'); ?>
		<?php echo $form->textField($model,'lavajam_no_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lavajam_no_to'); ?>
		<?php echo $form->textField($model,'lavajam_no_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->