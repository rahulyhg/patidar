<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lavajam-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'member_no'); ?>
		 <?php echo $form->dropDownList($model,'member_no',MemberMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_page_no'); ?>
		<?php echo $form->textField($model,'lavajam_page_no',array('size'=>6,'maxlength'=>5)); ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_page_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'lavajam_date',
			'language' => 'en',
			'options' => array(
			    'dateFormat'=>'yy-mm-dd',
			    'changeMonth' => 'true',
			    'changeYear' => 'true',
			    'duration'=>'fast',
			    'showAnim' =>'slide',
			    
			),
			'htmlOptions'=>array(
			'style'=>'height:18px;
			    padding-left: 4px;width:168px;'

			)
		    )
		);
	?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_no_of'); ?>
		<?php echo $form->textField($model,'lavajam_no_of',array('size'=>6,'maxlength'=>5)); ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_no_of'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_no_from'); ?>
		<?php echo $form->textField($model,'lavajam_no_from',array('size'=>10,'maxlength'=>10));  ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_no_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_no_to'); ?>
		<?php echo $form->textField($model,'lavajam_no_to',array('size'=>10,'maxlength'=>10));?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_no_to'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'lavajam_amount'); ?>
		<?php echo $form->textField($model,'lavajam_amount',array('size'=>10,'maxlength'=>10)); ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'lavajam_amount'); ?>
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
