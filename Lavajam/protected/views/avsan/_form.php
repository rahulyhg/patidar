<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avsan-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'avsan_number'); ?>
		<?php echo $form->textField($model,'avsan_number',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'avsan_number'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'member_no'); ?>
		<?php echo $form->dropDownList($model,'member_no',MemberMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_no'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'ausan_name'); ?>
		<?php echo $form->textField($model,'ausan_name',array('size'=>42,'maxlength'=>50)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'ausan_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ausan_sender_name'); ?>
		<?php echo $form->textField($model,'ausan_sender_name',array('size'=>42,'maxlength'=>50)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'ausan_sender_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ausan_sender_address'); ?>
		<?php echo $form->textField($model,'ausan_sender_address',array('size'=>42,'maxlength'=>100)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'ausan_sender_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ausan_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'ausan_date',
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
		<?php echo $form->error($model,'ausan_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avsan_size'); ?>
		<?php //echo $form->dropDownList($model,'avsan_size',CHtml::listData(RateMasterForAvasan::model()->findAll(),'id','size'),array('empty' => 'Select Size')); ?>
		<?php
			echo $form->dropDownList($model,'avsan_size',RateMasterForAvasan::items(),
			array(
			'prompt' => '---Select Size---',
			'ajax' => array(
			'type'=>'POST', 
			'url'=>CController::createUrl('Avsan/getItemName'), 
			'update'=>'#Avsan_ausan_total_amount', //selector to update			
			))); 
			 
			?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'avsan_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ausan_total_amount'); ?>
		<?php if(isset($model->ausan_total_amount))
		{
		   //echo $form->dropDownList($model,'ausan_total_amount',array()); 

		   echo $form->dropDownList($model,'ausan_total_amount', CHtml::listData(RateMasterForAvasan::model()->findAll(array('condition'=>'id='.$model->avsan_size)), 'rate', 'rate'));
		 
		}
		else
		{
			echo $form->dropDownList($model,'ausan_total_amount',array());
		}
		?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'ausan_total_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'url'=>$this->createUrl('Avsan/calculation_net_amount'), 
			//'update'=>'#JaheratWiseAvakTable_party_no', //selector to update	
			'success'=>'js:function(data) {  $("#amount_id").val(data);}',

					),
			'size'=>6	
		)); ?>	
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avsan_net_amount'); ?>
		<?php echo $form->textField($model,'avsan_net_amount',array('id'=>'amount_id', 'size'=>6,'readonly'=>true));?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'avsan_net_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
