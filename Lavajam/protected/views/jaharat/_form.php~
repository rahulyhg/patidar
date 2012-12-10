<div class="form">
<?php
$receiptno = Yii::app()->db->createCommand()
    ->select('jaharat_biil_no')
    ->from('jaharat')
    ->order('jaharat_biil_no desc')
    ->limit(1)
    ->queryScalar();
$lid= $receiptno+1;
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jaharat-form',
	'enableAjaxValidation'=>true,
	//'clientOptions'=>array('validateOnSubmit'=>true),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_biil_no'); ?>
		<?php 
		if(isset($model->jaharat_biil_no))
		{
			echo $form->textField($model,'jaharat_biil_no',array('size'=>6,'maxlength'=>5,'readonly'=>true));
		}
		else
		{
			echo $form->textField($model,'jaharat_biil_no',array('value'=>$lid,'size'=>6,'maxlength'=>5,'readonly'=>true));
		}
		?>               
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_biil_no'); ?>
	</div>
	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_page_no'); ?>
		<?php echo $form->textField($model,'jaharat_page_no',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_page_no'); ?>

	</div>
</div>
<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'jaharat_date',
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
		<?php echo $form->error($model,'jaharat_date'); ?>
		
	</div>
	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_bill_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'jaharat_bill_date',
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
		<?php echo $form->error($model,'jaharat_bill_date'); ?>
		
	</div>
</div>
	<div class="row">
		<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_type'); ?>
		<?php echo $form->dropDownList($model,'jaharat_type',CHtml::listData(JaharatTypeMaster::model()->findAll(),'id','jaharat_type_name'),array('empty' => 'Select Jaharat Type')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_type'); ?>
		</div>
	

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_type_color'); ?>
		<?php echo $form->dropdownList($model,'jaharat_type_color',array(""=>"---------Select---------","2 Color"=>"2 Color","4 Color"=>"4 Color",'Black & White'=>'Black & White')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_type_color'); ?>

	</div>
</div>

<div class="row">
		<div class="row-left">
		<?php echo $form->labelEx($model,'member_no'); ?>
		<?php //echo $form->dropDownList($model,'member_no',CHtml::listData(MemberMaster::model()->findAll(),'id','member_name'),array('empty' => 'Select Member')); ?>
		 <?php echo $form->dropDownList($model,'member_no',MemberMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'member_no'); ?>
		</div>

	<div class="row-right">
	<?php echo $form->labelEx($model,'party_no'); ?>
		<?php //echo $form->dropDownList($model,'party_no',CHtml::listData(PartyMaster::model()->findAll(),'id','party_name'),array('empty' => 'Select Party')); ?>
		 <?php echo $form->dropDownList($model,'party_no',PartyMaster::items(), array('empty' => '----Select----')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'party_no'); ?>
		
	</div>
</div>
<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_from_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'jaharat_from_date',
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
		<?php echo $form->error($model,'jaharat_from_date'); ?>
	</div>

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_to_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'jaharat_to_date',
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
		<?php echo $form->error($model,'jaharat_to_date'); ?>
	</div>
</div>


<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_ank_no_from'); ?>
		<?php echo $form->textField($model,'jaharat_ank_no_from',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_ank_no_from'); ?>
		
	</div>

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_ank_no_to'); ?>
		<?php echo $form->textField($model,'jaharat_ank_no_to',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_ank_no_to'); ?>
		
	</div>
</div>
<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_by_column'); ?>
		<?php echo $form->textField($model,'jaharat_by_column',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_by_column'); ?>
	</div>

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_by_cm'); ?>
		<?php echo $form->textField($model,'jaharat_by_cm',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_by_cm'); ?>
	</div>
</div>

<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_rate'); ?>
		<?php echo $form->textField($model,'jaharat_rate',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'url'=>$this->createUrl('Jaharat/calculation_total_amount'), 
			//'update'=>'#JaheratWiseAvakTable_party_no', //selector to update	
			'success'=>'js:function(data) { $("#kwdemand_id").val(data); 
			$("#amount_id").val(data);}',

					),
			'size'=>6	
		)); ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_rate'); ?>
	</div>

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_total_amount'); ?>
		<?php echo $form->textField($model,'jaharat_total_amount',array('id'=>'kwdemand_id','size'=>10));?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_total_amount'); ?>
	</div>
</div>

<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_discount'); ?>
		<?php echo $form->textField($model,'jaharat_discount',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'url'=>$this->createUrl('Jaharat/calculation_discount_amount'), 
			//'update'=>'#JaheratWiseAvakTable_party_no', //selector to update	
			'success'=>'js:function(data) {  $("#amount_id").val(data);}',

					),
			'size'=>6	
		)); ?>		
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_discount'); ?>
	</div>

	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_kasar'); ?>
		<?php echo $form->textField($model,'jaharat_kasar',
		array(
			'ajax' => array(
			'type'=>'POST', 
			'url'=>$this->createUrl('Jaharat/calculation_net_amount'), 
			//'update'=>'#JaheratWiseAvakTable_party_no', //selector to update	
			'success'=>'js:function(data) { $("#amount_id").val(data); }',

					),
			'size'=>11	
		)); ?>
		<span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_kasar'); ?>
	</div>
</div>
<div class="row">
	<div class="row-left">
		<?php echo $form->labelEx($model,'jaharat_net_amount'); ?>
		<?php echo $form->textField($model,'jaharat_net_amount',array('id'=>'amount_id', 'size'=>11,'readonly'=>true));?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'jaharat_net_amount'); ?>
	</div>
<!--
	<div class="row-right">
		<?php echo $form->labelEx($model,'jaharat_receive_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'jaharat_receive_date',
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
		<?php echo $form->error($model,'jaharat_receive_date'); ?>
	</div>--></div>
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







