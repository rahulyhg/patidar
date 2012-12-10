<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-master-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'member_number'); ?>
		<?php echo $form->textField($model,'member_number',array('size'=>5,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_name'); ?>
		<?php echo $form->textField($model,'member_name',array('size'=>23,'maxlength'=>30)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_address'); ?>
		<?php echo $form->textArea($model,'member_address',array('maxlength'=>100)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_zone'); ?>
		<?php //echo $form->textField($model,'member_zone'); ?>
		<?php echo $form->dropDownList($model,'member_zone',CHtml::listData(ZoneMaster::model()->findAll(),'id','zone_name'),array('empty' => '-------Select Zone-------')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_zone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_birthdate'); ?>
		
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'member_birthdate',
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
		<?php echo $form->error($model,'member_birthdate'); ?>
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
