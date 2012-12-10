<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_voucher_no')); ?>:</b>
	<?php echo CHtml::encode($data->expense_voucher_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_date')); ?>:</b>
	<?php echo CHtml::encode($data->expense_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->expense_master_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expense_amount')); ?>:</b>
	<?php echo CHtml::encode($data->expense_amount); ?>
	<br />


</div>