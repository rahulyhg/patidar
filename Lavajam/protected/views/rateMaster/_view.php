<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_page_no')); ?>:</b>
	<?php echo CHtml::encode($data->rate_page_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_type_color')); ?>:</b>
	<?php echo CHtml::encode($data->rate_type_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_amount')); ?>:</b>
	<?php echo CHtml::encode($data->rate_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>