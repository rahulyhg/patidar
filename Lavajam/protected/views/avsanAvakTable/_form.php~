<script>
$(document).ready(function () {
$('#AvsanAvakTable_payment_type').change(function () {

	//alert("hello");
	//alert($('#JaheratAvakTable_payment_type option:selected').text());
	if($('#AvsanAvakTable_payment_type option:selected').text()=="રોકડ"){
	$("#AvsanAvakTable_bank_master_id").attr("disabled", true);	
	$("#AvsanAvakTable_cheque_dd_no").attr("disabled", true);	
	}
	else
	{
		$("#AvsanAvakTable_bank_master_id").attr("disabled", false);	
		$("#AvsanAvakTable_cheque_dd_no").attr("disabled", false);	

	}
});

});
</script>
<?php
$receiptno = Yii::app()->db->createCommand()
    ->select('receipt_no')
    ->from('avsan_avak_table')
    ->order('receipt_no desc')
    ->limit(1)
    ->queryScalar();
$lid= $receiptno+1;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avsan-avak-table-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'receipt_no'); ?>
		<?php 
		if(isset($model->receipt_no))
		{
			echo $form->textField($model,'receipt_no',array('size'=>6,'maxlength'=>5,'readonly'=>true));
		}
		else
		{
			echo $form->textField($model,'receipt_no',array('value'=>$lid,'size'=>6,'maxlength'=>5,'readonly'=>true));
		}
		?>
		<span class="status">&nbsp;</span>
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
	</div>
		
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



	
	
<!--
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
		<?php echo $form->dropDownList($model,'member_no',MemberMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_no'); ?>
	</div>

-->
		<div class="row">
		<?php echo $form->labelEx($model,'payment_type'); ?>
		
		<?php echo $form->dropdownList($model,'payment_type',array(""=>"---------Select---------","રોકડ"=>"રોકડ","ચેક"=>"ચેક","ડ્રાફ્ટ"=>"ડ્રાફ્ટ")); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'payment_type'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'bank_master_id'); ?>
		<?php if($model->scenario == 'update')
		{
			if($model->payment_type == 'રોકડ')
			{
			    echo $form->dropDownList($model,'bank_master_id',CHtml::listData(BankMaster::model()->findAll(),'id','bank_name'),array('empty' => '-------Select Bank-------','disabled'=>'true'));
			}
			else
			{
			    echo $form->dropDownList($model,'bank_master_id',CHtml::listData(BankMaster::model()->findAll		(),'id','bank_name'),array('empty' => '-------Select Bank-------'));
			}
		}
			else
			{
			    echo $form->dropDownList($model,'bank_master_id',CHtml::listData(BankMaster::model()->findAll		(),'id','bank_name'),array('empty' => '-------Select Bank-------'));
			}

		?>
		<?php //echo $form->dropDownList($model,'bank_master_id',CHtml::listData(BankMaster::model()->findAll(),'id','bank_name'),array('empty' => '-------Select Bank-------')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'bank_master_id'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'cheque_dd_no'); ?>
		<?php if($model->scenario == 'update')
		{
			if($model->payment_type == 'રોકડ')
			{
			    echo $form->textField($model,'cheque_dd_no',array('size'=>6,'maxlength'=>5,'disabled'=>'true'));
			}
			else
			{
			    echo $form->textField($model,'cheque_dd_no',array('size'=>6,'maxlength'=>5));
			}
		}
		else
		{
			    echo $form->textField($model,'cheque_dd_no',array('size'=>6,'maxlength'=>5));
		}	

		?>
		<?php //echo $form->textField($model,'cheque_dd_no',array('size'=>6,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'cheque_dd_no'); ?>
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

