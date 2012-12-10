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

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_no_of_avasan')); ?>:</b>
	<?php echo CHtml::encode($data->bill_no_of_avasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_date_of_avasan')); ?>:</b>
	<?php echo CHtml::encode($data->bill_date_of_avasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_no')); ?>:</b>
	<?php echo CHtml::encode($data->party_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />


</div>