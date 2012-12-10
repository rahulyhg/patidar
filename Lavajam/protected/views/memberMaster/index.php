<?php
$this->breadcrumbs=array(
	'Member Masters',
);

$this->menu=array(
	array('label'=>'Create MemberMaster', 'url'=>array('create')),
	array('label'=>'Manage MemberMaster', 'url'=>array('admin')),
);
?>

<h1>Member Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
