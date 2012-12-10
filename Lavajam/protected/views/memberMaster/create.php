<?php
$this->breadcrumbs=array(
	'Member'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List MemberMaster', 'url'=>array('index')),
	//array('label'=>'Manage MemberMaster', 'url'=>array('admin')),
	array('label'=>'', 'url'=>array('admin'),'linkOptions'=>array('class'=>'Manage','title'=>'Manage')),
);
?>

<h1>Create Member</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
