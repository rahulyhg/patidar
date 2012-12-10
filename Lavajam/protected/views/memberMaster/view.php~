<?php
$this->breadcrumbs=array(
	'Member'=>array('admin'),
	$model->member_name,
);

$this->menu=array(
	//array('label'=>'List MemberMaster', 'url'=>array('index')),
	

	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Member <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'member_number',
		'member_name',
		'member_address',
		//'member_zone',
		array(
		 'name'=>'zone_name',
//                'type'=>'raw',		
                'value'=> $model->Rel_member->zone_name,
	          ),
		'member_birthdate',
		'creation_date',
		//'created_by',
		array(
		 'name'=>'created_by',
//                'type'=>'raw',		
                'value'=>User::model()->findByPk($model->created_by)->user_id,
	          ),
	),
)); ?>
