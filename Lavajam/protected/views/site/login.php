<!--
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>-->

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<div>
		<?php echo $form->labelEx($model,'username',array('id'=>'loginlabel')); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'password',array('id'=>'loginlabel')); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>
<!--
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
-->
	<div class="loginbutton">
		<?php echo CHtml::submitButton('Login',array('align'=>'center','class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
