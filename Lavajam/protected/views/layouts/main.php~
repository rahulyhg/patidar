<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="header">
		<div id="logo" style="width:940;" ><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
<div class="container" id="page">

<!--<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>-->

	<div>
	<?php //$this->pageTitle=Yii::app()->name; ?>

<!--<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->

<?php
if(!Yii::app()->user->isGuest)
{
$this->widget('application.extensions.menu.SMenu',
array(
"menu"=>array(
  array("url"=>array(
              "route"=>"/ZoneMaster/admin"),
               "label"=>"Master Details",
	 array("url"=>array(
                       "route"=>"/User/admin"),
                       "label"=>"User",),
          array("url"=>array(
                       "route"=>"/ZoneMaster/admin"),
                       "label"=>"Zone",),
          array("url"=>array(
                      "route"=>"/MemberMaster/admin"),
                      "label"=>"Member",),
	  array("url"=>array(
                      "route"=>"/partyMaster/admin"),
                      "label"=>"Party",),
	  array("url"=>array(
                      "route"=>"/bankMaster/admin"),
                      "label"=>"Bank",),
	 /*  array("url"=>array(
                      "route"=>"/RateMasterForJaherat/admin"),
                      "label"=>"Jaherat Rate",),*/
	   array("url"=>array(
                      "route"=>"/RateMasterForAvasan/admin"),
                      "label"=>"Avsan Rate",),
	  array("url"=>array(
                      "route"=>"/LavajamRateMaster/admin"),
                      "label"=>"Lavajam Rate",),
	  array("url"=>array(
                      "route"=>"/jaharatTypeMaster/admin"),
                      "label"=>"Jaherat Type",),
	  array("url"=>array(
                      "route"=>"/expenseGroupMaster/admin"),
                      "label"=>"Expense Group",),
          array("url"=>array(
                      "route"=>"/expenseMaster/admin"),
                      "label"=>"Expense",)),

	 array("url"=>array(
              "route"=>"/jaharat/admin"),
               "label"=>"Jaherat Details",
	 array("url"=>array(
                       "route"=>"/jaharat/admin"),
                       "label"=>"Jaherat",),
          array("url"=>array(
                       "route"=>"/jaheratAvakTable/admin"),
                       "label"=>"Jaherat Avak Details",),
          array("url"=>array(
                      "route"=>"/jaheratWiseAvakTable/admin"),
                      "label"=>"Jaherat Cash Avak",)),

	  array("url"=>array(
              "route"=>"/avsan/admin"),
               "label"=>"Avsan Details",
	 array("url"=>array(
                       "route"=>"/avsan/admin"),
                       "label"=>"Avsan",),
          array("url"=>array(
                       "route"=>"/avsanAvakTable/admin"),
                       "label"=>"Avsan Avak Details",),
          array("url"=>array(
                      "route"=>"/avsanWiseAvakTable/admin"),
                      "label"=>"Avsan Cash Avak",)),

	array("url"=>array(
              "route"=>"/lavajam/admin"),
               "label"=>"Lavajam Details",
	 array("url"=>array(
                       "route"=>"/lavajam/admin"),
                       "label"=>"Lavajam",),
          array("url"=>array(
                       "route"=>"/expense/admin"),
                       "label"=>"Expense",),
          array("url"=>array(
                      "route"=>"/bankSlip/admin"),
                      "label"=>"Bank Slip",)),

	array("url"=>array(
                      "route"=>"/site/login"),
                      "label"=>"Login",
		      "visible"=>Yii::app()->user->isGuest),
	array("url"=>array(
                      "route"=>"/site/logout"),
                      "label"=>"Logout(".Yii::app()->user->name.")",
		      "visible"=>!Yii::app()->user->isGuest),
	
	
          ),
"stylesheet"=>"menu_blue.css",
"menuID"=>"myMenu",
"delay"=>3
)
);
}
?>
	</div><!-- mainmenu -->
	</br></br>
	<div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?></div>

	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->
<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Rudra Softech.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</body>
</html>
