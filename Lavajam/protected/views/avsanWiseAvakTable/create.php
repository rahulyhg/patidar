<?php
$this->breadcrumbs=array(
	'Avsan Cash Avak Details'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List AvsanWiseAvakTable', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Avsan Cash Avak Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
