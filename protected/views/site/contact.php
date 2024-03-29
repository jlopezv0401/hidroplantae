<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<section id="content" class="clearfix">
  	<div class="container">
	    <div class="row"> 

			<h1>Contact Us</h1>

			<?php if(Yii::app()->user->hasFlash('contact')): ?>

			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('contact'); ?>
			</div>

			<?php else: ?>

			<p>
			If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
			</p>

			<div class="form">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'contact-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>
				<div class="main-content">
					<p>
						<div class="note">
							<?php echo $form->labelEx($model,'name'); ?>
							<?php echo $form->textField($model,'name'); ?>
							<?php echo $form->error($model,'name'); ?>
						</div>
					</p>
					<p>
						<div class="note">
							<?php echo $form->labelEx($model,'email'); ?>
							<?php echo $form->textField($model,'email'); ?>
							<?php echo $form->error($model,'email'); ?>
						</div>
					</p>
					<p>
						<div class="note">
							<?php echo $form->labelEx($model,'subject'); ?>
							<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
							<?php echo $form->error($model,'subject'); ?>
						</div>
					</p>
					<p>	
						<div class="note">
							<?php echo $form->labelEx($model,'body'); ?>
							<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model,'body'); ?>
						</div>
					</p>
					<?php if(CCaptcha::checkRequirements()): ?>
					<p>
						<div class="note">
							<?php echo $form->labelEx($model,'verifyCode'); ?>
							<div>
							<p><?php $this->widget('CCaptcha'); ?></p>
								<p><?php echo $form->textField($model,'verifyCode'); ?></p>
							</div class="note">
							<div class="hint">Please enter the letters as they are shown in the image above.
							<br/>Letters are not case-sensitive.</div>
							<?php echo $form->error($model,'verifyCode'); ?>
						</div>
					</p>
					<?php endif; ?>
					<p>
				        <input type="submit" value="Send Message" class="submit"/>
				    </p>

				
				</div>
				<!-- <div class="note submit button">

					<?php echo CHtml::submitButton('Submit'); ?>
				</div> -->



			<?php $this->endWidget(); ?>

			</div><!-- form -->
		</div>
	</div>
</section>
<?php endif; ?>