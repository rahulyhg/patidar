<?php
$this->breadcrumbs=array(
	'Expenses'=>array('admin'),
	//$model->id=>array('view','id'=>$model->id),
	$model->expense_voucher_no,
	'Update',
);

$this->menu=array(
	//array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class'=>'Create','title'=>'Create')),
	array('label'=>'', 'url'=>array('view', 'id'=>$model->id),'linkOptions'=>array('class'=>'View','title'=>'View')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Update Expense <?php //echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
