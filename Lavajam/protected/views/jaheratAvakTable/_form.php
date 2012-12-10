<script>
$(document).ready(function () {
$('#JaheratAvakTable_payment_type').change(function () {

	//alert("hello");
	//alert($('#JaheratAvakTable_payment_type option:selected').text());
	if($('#JaheratAvakTable_payment_type option:selected').text()=="રોકડ"){
	$("#JaheratAvakTable_bank_master_id").attr("disabled", true);	
	$("#JaheratAvakTable_cheque_dd_no").attr("disabled", true);	
	}
	else
	{
		$("#JaheratAvakTable_bank_master_id").attr("disabled", false);	
		$("#JaheratAvakTable_cheque_dd_no").attr("disabled", false);	

	}
});

});
</script>
<?php
$receiptno = Yii::app()->db->createCommand()
    ->select('receipt_no')
    ->from('jaherat_avak_table')
    ->order('receipt_no desc')
    ->limit(1)
    ->queryScalar();
$lid= $receiptno+1;
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jaherat-avak-table-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="block-error">
		<?php echo Yii::app()->user->getFlash('payment'); ?>
	</div>
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
		<?php //echo $form->textField($model,'receipt_date'); ?>
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
		<?php echo $form->labelEx($model,'bill_no_of_jaharat'); ?>
		<?php echo $form->textField($model,'bill_no_of_jaharat',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'dataType' => 'json',
			'url'=>$this->createUrl('test'), 
			'success'=>'js:function(data) {$("#amount_id1").val(data.unpaid_amt),$("#amount_id2").val(data.paid_amt),$("#amount_id3").val(data.bdate),$("#pid").val(data.pname); }',
			//'success' => 'test',
					),
			'size'=>6	
		)); ?>			
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'bill_no_of_jaharat'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'bill_date_of_jaharat'); ?>
		<?php echo $form->textField($model,'bill_date_of_jaharat',array('id'=>'amount_id3','size'=>10,'readonly'=>'true'));?>
		<?php
		/*$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'bill_date_of_jaharat',
			'language' => 'en',
			'options' => array(
			    'dateFormat'=>'yy-mm-dd',
			    'changeMonth' => 'true',
			    'changeYear' => 'true',
			    'duration'=>'fast',
			    'showAnim' =>'slide',
			    
			),
			'htmlOptions'=>array(
			'id'=>'amount_id3',
			'readonly' => true,
			'style'=>'height:18px;
			    padding-left: 4px;width:168px;'

			)
		    )
		);*/
	?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'bill_date_of_jaharat'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		 <?php echo $form->textField($model,'party_id',array('id'=>'pid','size'=>10,'readonly'=>'true'));?>
		<?php echo $form->error($model,'party_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'payment_type'); ?>
		<?php //echo $form->textField($model,'payment_type',array('size'=>30,'maxlength'=>30)); ?>
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
		<?php echo $form->labelEx($model,'unpaid_amount'); ?>
	<?php echo $form->textField($model,'unpaid_amount',array('id'=>'amount_id1','size'=>10,'disabled'=>'true'));?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'unpaid_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_amount'); ?>
	<?php echo $form->textField($model,'paid_amount',array('id'=>'amount_id2','size'=>10,'disabled'=>'true')); ?><span class="status">&nbsp;</span>
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
