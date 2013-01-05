<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<section id="content" class="clearfix">
  	<div class="container">

	    <div class="row"> 

			<h1><?php echo UserModule::t("Login"); ?></h1>

			<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

			<div class="success">
				<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
			</div>

			<?php endif; ?>

			<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

			<div class="form">
			<?php echo CHtml::beginForm(); ?>

				<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
				
				<?php echo CHtml::errorSummary($model); ?>
				<div class="main-content span8">
					<p>
						<?php echo CHtml::activeLabelEx($model,'username'); ?>
						<?php echo CHtml::activeTextField($model,'username') ?>
					</p>
					
					<p>
						<?php echo CHtml::activeLabelEx($model,'password'); ?>
						<?php echo CHtml::activePasswordField($model,'password') ?>
					</p>
					<p>
						<div class="row">
							<p class="hint">
							<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
							</p>
						</div>
						
						<div class="row rememberMe">
							<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
							<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
						</div>
					</p>
					<p>
				        <input type="submit" value="Login" class="submit"/>
				    </p>
				</div>
				
			<?php echo CHtml::endForm(); ?>
			</div><!-- form -->
		</div>
	</div>
</section>


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>