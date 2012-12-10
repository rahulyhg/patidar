<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_name')); ?>:</b>
	<?php echo CHtml::encode($data->party_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_address_1')); ?>:</b>
	<?php echo CHtml::encode($data->party_address_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_address_2')); ?>:</b>
	<?php echo CHtml::encode($data->party_address_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_address_3')); ?>:</b>
	<?php echo CHtml::encode($data->party_address_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>