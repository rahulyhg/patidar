<?php
$this->breadcrumbs=array(
	'Jaherats'=>array('admin'),
	$model->jaharat_biil_no,
);

$this->menu=array(
	//array('label'=>'List Jaharat', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Jaherat <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'party_no',
		//'member_no',
		'jaharat_biil_no',
		'jaharat_page_no',
		'jaharat_date',
		'jaharat_bill_date',
		array(
		 'name'=>'jaharat_type_name',
//                'type'=>'raw',		
                'value'=> $model->rel_jaharat_jaharatype->jaharat_type_name,
	          ),
		'jaharat_type_color',
		array(
		 'name'=>'member_name',
//                'type'=>'raw',		
                'value'=> $model->rel_jaharat_member->member_name,
	          ),
		array(
		 'name'=>'party_name',
//                'type'=>'raw',		
                'value'=> $model->rel_jaharat_party->party_name,
	          ),
				
		'jaharat_from_date',
		'jaharat_to_date',
		'jaharat_ank_no_from',
		'jaharat_ank_no_to',
		//'jaharat_type',
		'jaharat_page_no',
		'jaharat_by_column',
		'jaharat_by_cm',
		'jaharat_rate',
		'jaharat_total_amount',
		'jaharat_discount',
		'jaharat_kasar',
		'jaharat_net_amount',
		//'jaharat_receive_date',
		'creation_date',
		//'created_by',
		array(
		 'name'=>'created_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->created_by)->user_id,
	          ),
	),
)); ?>
