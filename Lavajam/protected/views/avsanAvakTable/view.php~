<?php
$this->breadcrumbs=array(
	'Avsan Avak Details'=>array('admin'),
	$model->receipt_no,
);

$this->menu=array(
	//array('label'=>'List AvsanAvakTable', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Avsan Avak Details<?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'receipt_no',
		'receipt_date',
		'bill_no_of_avasan',
		//'bill_date_of_avasan',
		/*array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> $model->Rel_avsanavak_member->member_name,
	          ),*/
		'payment_type',
		array(
		 'name'=>'bank_name',
//                'type'=>'raw',		
                'value'=>($model->bank_master_id == null) ? "NA" :$model->Rel_avsanavak_bank->bank_name,
	          ),
		array(
		 'name'=>'cheque_dd_no',
//                'type'=>'raw',		
                'value'=>($model->cheque_dd_no == null) ? "NA" :$model->cheque_dd_no,
	          ),
		
		'amount',
	),
)); ?>
