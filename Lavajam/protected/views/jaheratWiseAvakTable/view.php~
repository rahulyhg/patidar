<?php
$this->breadcrumbs=array(
	'Jaherat Cash Avak Details'=>array('admin'),
	$model->receipt_no,
);

$this->menu=array(
	//array('label'=>'List JaheratWiseAvakTable', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('update', 'id'=>$model->id),'linkOptions'=>array('class'=>'Edit','title'=>'Update')),
	array('label'=>'', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'Delete','title'=>'Delete')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>View Jaherat Cash Avak Details <?php //echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'receipt_no',
		'receipt_date',
		'bill_no_of_jaherat',
		'bill_date_of_jaherat',
		array(
		 'name'=>'party_name',
//                'type'=>'raw',		
                'value'=>$model->Rel_jaharatwiseavak_party->party_name,
	          ),
		
		//'party_no',
		'amount',
	),
)); ?>
