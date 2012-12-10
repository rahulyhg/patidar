<?php
$this->breadcrumbs=array(
	'Jaherat Avak Details'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List JaheratAvakTable', 'url'=>array('index')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Jaherat Avak Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
