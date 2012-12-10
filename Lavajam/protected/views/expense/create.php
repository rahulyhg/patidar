<?php
$this->breadcrumbs=array(
	'Expenses'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Expense</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
