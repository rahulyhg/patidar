<?php
$this->breadcrumbs=array(
	'Avsan'=>array('admin'),
	$model->ausan_name,
);

$this->menu=array(
	//array('label'=>'List Avsan', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Avsan <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'member_no',
		'avsan_number',
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> $model->rel_avsan_member->member_name,
	          ),
		
		'ausan_name',
		'ausan_sender_name',
		'ausan_sender_address',
		'ausan_date',
		//'ausan_no_of_picture',
		array(
		 'name'=>'size',
//                'type'=>'raw',		
                'value'=>$model->rel_avsan_size->size,
	          ),
		'ausan_total_amount',
		'discount',
		'avsan_net_amount',
		'creation_date',
		//'creation_by',
		array(
		 'name'=>'creation_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->creation_by)->user_id,
	          ),
	),
)); ?>
