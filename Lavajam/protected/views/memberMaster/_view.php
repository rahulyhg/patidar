<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_name')); ?>:</b>
	<?php echo CHtml::encode($data->member_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_address')); ?>:</b>
	<?php echo CHtml::encode($data->member_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_zone')); ?>:</b>
	<?php echo CHtml::encode($data->member_zone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->member_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>