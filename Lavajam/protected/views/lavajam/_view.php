<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_no')); ?>:</b>
	<?php echo CHtml::encode($data->member_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_page_no')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_page_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_date')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_no_of')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_no_of); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_amount')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_no_from')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_no_from); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lavajam_no_to')); ?>:</b>
	<?php echo CHtml::encode($data->lavajam_no_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>