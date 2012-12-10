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
		<?php echo $form->label($model,'party_no'); ?>
		<?php echo $form->textField($model,'party_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'member_no'); ?>
		<?php echo $form->textField($model,'member_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_date'); ?>
		<?php echo $form->textField($model,'jaharat_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_biil_no'); ?>
		<?php echo $form->textField($model,'jaharat_biil_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_from_date'); ?>
		<?php echo $form->textField($model,'jaharat_from_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_to_date'); ?>
		<?php echo $form->textField($model,'jaharat_to_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_ank_no_from'); ?>
		<?php echo $form->textField($model,'jaharat_ank_no_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_ank_no_to'); ?>
		<?php echo $form->textField($model,'jaharat_ank_no_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_type'); ?>
		<?php echo $form->textField($model,'jaharat_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_page_no'); ?>
		<?php echo $form->textField($model,'jaharat_page_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_by_column'); ?>
		<?php echo $form->textField($model,'jaharat_by_column'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_by_cm'); ?>
		<?php echo $form->textField($model,'jaharat_by_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_rate'); ?>
		<?php echo $form->textField($model,'jaharat_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_total_amount'); ?>
		<?php echo $form->textField($model,'jaharat_total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_discount'); ?>
		<?php echo $form->textField($model,'jaharat_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_kasar'); ?>
		<?php echo $form->textField($model,'jaharat_kasar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_net_amount'); ?>
		<?php echo $form->textField($model,'jaharat_net_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jaharat_receive_date'); ?>
		<?php echo $form->textField($model,'jaharat_receive_date'); ?>
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