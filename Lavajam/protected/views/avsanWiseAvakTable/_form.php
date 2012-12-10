<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avsan-wise-avak-table-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'receipt_no'); ?>
		<?php echo $form->textField($model,'receipt_no',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'receipt_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receipt_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'receipt_date',
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
		<?php echo $form->error($model,'receipt_date'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'bill_no_of_avasan'); ?>
		<?php echo $form->textField($model,'bill_no_of_avasan',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'dataType' => 'json',
			'url'=>$this->createUrl('test'), 
			'success'=>'js:function(data) { $("#amount_id").val(data.dead_person),$("#amount_id1").val(data.sender_name),$("#amount_id2").val(data.unpaid_amt),$("#amount_id3").val(data.paid_amt); }',
			//'success' => 'test',
					),
			'size'=>6	
		)); ?>	
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'bill_no_of_avasan'); ?>
	</div><!--
	<div class="row">
		<?php echo $form->labelEx($model,'bill_date_of_avasan'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'bill_date_of_avasan',
			'language' => 'en',
			'options' => array(
			    'dateFormat'=>'yy-mm-dd',
			    'changeMonth' => 'true',
			    'changeYear' => 'true',
			    'duration'=>'fast',
			    'showAnim' =>'slide',    
			),
			'htmlOptions'=>array(
			'onChange'=>CHtml::ajax(
				array(
				'type'=>'POST',
				'url'=>$this->createUrl('AvsanWiseAvakTable/test'), 
				'success'=>'js:function(data) { $("#kwdemand_id").val(data); }',
			        )), 
			'style'=>'height:18px;
			    padding-left: 4px;width:168px;'

			)
		    )
		);
	?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'bill_date_of_avasan'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'member_no'); ?>
		<?php echo $form->textField($model,'member_no',array('id'=>'kwdemand_id', 'name'=>'kwdemand', 'size'=>5));?>
		<?php echo $form->error($model,'member_no'); ?>
	</div>-->
	<div class="row">
		<?php echo $form->labelEx($model,'Avsan_Person_Name'); ?>
		<?php echo $form->textField($model,'Avsan_Person_Name',array('id'=>'amount_id', 'size'=>20,'disabled'=>'true'));?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'Avsan_Person_Name'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'Avsan_Sender_Name'); ?>
		<?php echo $form->textField($model,'Avsan_Sender_Name',array('id'=>'amount_id1','size'=>20,'disabled'=>'true')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'Avsan_Sender_Name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'unpaid_amount'); ?>
		<?php echo $form->textField($model,'unpaid_amount',array('id'=>'amount_id2','size'=>10,'disabled'=>'true')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'unpaid_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_amount'); ?>
		<?php echo $form->textField($model,'paid_amount',array('id'=>'amount_id3','size'=>10,'disabled'=>'true')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'paid_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>12,'maxlength'=>10)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
