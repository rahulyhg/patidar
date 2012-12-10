<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expense-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_voucher_no'); ?>
		<?php echo $form->textField($model,'expense_voucher_no',array('size'=>6,'maxlength'=>5)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'expense_voucher_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_master_id'); ?>
		<?php echo $form->dropDownList($model,'expense_master_id',CHtml::listData(ExpenseMaster::model()->findAll(),'id','expense_name'),array('empty' => '-------Select Expense-------')); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'expense_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_amount'); ?>
		<?php echo $form->textField($model,'expense_amount',array('size'=>12,'maxlength'=>10)); ?><span class="status">&nbsp;</span>
		<?php echo $form->error($model,'expense_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expense_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		    array(
			'model'=>$model,
			'attribute'=>'expense_date',
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
		<?php echo $form->error($model,'expense_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
