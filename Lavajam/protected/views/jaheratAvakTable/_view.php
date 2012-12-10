<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receipt_no')); ?>:</b>
	<?php echo CHtml::encode($data->receipt_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receipt_date')); ?>:</b>
	<?php echo CHtml::encode($data->receipt_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_no_of_jaharat')); ?>:</b>
	<?php echo CHtml::encode($data->bill_no_of_jaharat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_date_of_jaharat')); ?>:</b>
	<?php echo CHtml::encode($data->bill_date_of_jaharat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_master_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cheque_dd_no')); ?>:</b>
	<?php echo CHtml::encode($data->cheque_dd_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_type')); ?>:</b>
	<?php echo CHtml::encode($data->payment_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	*/ ?>

</div>