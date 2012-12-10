<?php
$this->breadcrumbs=array(
	'Avsans Rate Details'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List RateMasterForAvasan', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Avsan Rate Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
