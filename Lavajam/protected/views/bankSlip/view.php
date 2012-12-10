<?php
$this->breadcrumbs=array(
	'Bank Slips'=>array('admin'),
	$model->rel_bankslip_member->member_name,
);

$this->menu=array(
	//array('label'=>'List BankSlip', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Bank Slip <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'slip_no',
		//'member_id',
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> $model->rel_bankslip_member->member_name,
	          ),
	),
)); ?>
