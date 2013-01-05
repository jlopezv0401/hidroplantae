<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<meta charset="utf-8">
	<meta name="description" content="business portfolio site template" />
	<meta name="keywords" content="business, marketing, corporate, app, software, marketing"/>
	<meta name="author" content="Tansh" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<!--Fav and touch icons-->
	<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://tanshcreative.com/grepfrut-st-demo/img/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://tanshcreative.com/grepfrut-st-demo/img/icons/apple-touch-icon-114x114.png">

	<!--google web font-->
  
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
  
	<!--style sheet-->
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css"/>
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css"/>
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css"/>

	<!--jquery libraries / others are at the bottom-->
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.1.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.js" type="text/javascript"></script>

	<!--elastislide carousel script starts-->
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/elastislide.css"/>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elastislide.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	$('#carousel').elastislide({
			imageW 		: 300,
			margin		: 20,
			border		: 0,
			easing		: 'easeInBack'
	});
	});
	</script>
	<!--elastislide carousel script ends-->

	<!--prettyphoto scripts starts-->
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prettyPhoto.css"/>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {	
			$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
			});
			$("a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
			animation_speed: 'fast',
			slideshow: 5000,
			autoplay_slideshow: false,
			opacity: 0.80,
			show_title: false,
			theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			overlay_gallery: false,
			social_tools: false,
			changepicturecallback: function(){
			var $pp = $('.pp_default');
			if( parseInt( $pp.css('left') ) < 0 ){
			$pp.css('left', 0 );
			}
			}
			});	
	});
	</script>
	<!--prettyphoto scripts ends-->

	<!--flexslider scripts starts-->
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css"/>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
	// Slider with thumbnail
	$(document).ready(function() {
	if($(window).width() < 959)
	{
			$('#slider').flexslider({
			directionNav: true,
			controlNav: false,
			});
	}
	else
	{
			$('#thumb-slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: true,
			directionNav: false,
			controlNav: false,
			itemWidth: 180,
			itemMargin: 0,
			asNavFor: '#slider'
			});
			$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			directionNav: false,
			animationLoop: true,
			slideshow: true,
			sync: "#thumb-slider"
	        });
	}
	});
	</script>
	<!--flexslider scripts ends-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>	

<body>
<!-- header starts
================================================== -->
<section id="header" class="clearfix">
  <div class="container">
    <div class="row"> 
      
      <!--logo starts-->
      <div class="span4 logo"><a href="index.html#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" width="148" height="41" alt="logo"></a></div>
      <!--logo ends-->
      
      <div class="span8 clearfix"> 
        
        <!--social starts-->
        <ul class="social clearfix">
          <li><a href="index.html#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/social-icon-linkedin.png" width="28" height="28" alt="icon"></a></li>
          <li><a href="index.html#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/social-icon-facebook.png" width="28" height="28" alt="icon"></a></li>
          <li><a href="index.html#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/social-icon-twitter.png" width="28" height="28" alt="icon"></a></li>
        </ul>
        <!--social ends--> 
        
        <!--menu starts-->
        <!--<div id="smoothmenu" class="ddsmoothmenu">
          <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="about.html">About</a> </li>
            <li><a href="index.html#">Features</a>
              <ul>
                <li><a href="features-var1.html">Features Style 1</a></li>
                <li><a href="features-var2.html">Features Style 2</a></li>
              </ul>
            </li>
         
            <li><a href="index.html#">Pages</a>
              <ul>
                <li><a href="index-var.html">Home variation</a> </li>
                <li><a href="index.html#">Portfolio</a>
                  <ul>
                    <li><a href="portfolio-3col.html">Portfolio - 3 column</a></li>
                    <li><a href="portfolio-4col.html">Portfolio - 4 column</a></li>
                  </ul>
                </li>
                <li><a href="support.html">Support / FAQ</a> </li>
                <li><a href="about.html">About</a> </li>
                <li><a href="shortcodes.html">Shortcodes</a> </li>
                <li><a href="index.html#">Blog</a>
                  <ul>
                    <li><a href="blog.html">Multiposts</a> </li>
                    <li><a href="blogpost.html">Single Blogpost</a> </li>
                  </ul>
                </li>
                <li><a href="index.html#">Pricing</a>
                  <ul>
                    <li><a href="pricing-4col.html">Pricing - 4 column</a></li>
                    <li><a href="pricing-3col.html">Pricing - 3 column</a></li>
                  </ul>
                </li>
                <li><a href="index.html#">Features</a>
                  <ul>
                    <li><a href="features-var1.html">Features Style 1</a></li>
                    <li><a href="features-var2.html">Features Style 2</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a> </li>
              </ul>
            </li>
            <li><a href="index.html#">Pricing</a>
              <ul>
                <li><a href="pricing-4col.html">Pricing - 4 column</a></li>
                <li><a href="pricing-3col.html">Pricing - 3 column</a></li>
              </ul>
            </li>
            <li><a href="index.html#" class="menu_color">Colors</a>
              <ul>
                <li><a href="yellow/index.html">Yellow</a></li>
                <li><a href="cyan/index.html">Cyan</a></li>
                <li><a href="green/index.html">Green</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>-->
        <!--menu ends--> 

	    <div id="smoothmenu" class="ddsmoothmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'¿Quienes somos?', 'url'=>array('/site/page','view'=>'quienes'), 'items' =>array(
              			array('label'=>'El Proyecto', 'url'=>array('/site/page')),
              			array('label'=>'Misión', 'url'=>array('/site/index')),
              			array('label'=>'Visión', 'url'=>array('/site/index')),
            		),),
					array('label'=>'¿Qué Hacemos?', 'url'=>array('/site/page', 'view'=>'about'), 'items' =>array(
              			array('label'=>'Educación Tecnológica', 'url'=>array('/site/index')),
              			array('label'=>'Producción Hidropónica', 'url'=>array('/site/index')),
              			array('label'=>'Producción Agrícola', 'url'=>array('/site/index')),
              			array('label'=>'Cuidado del Agua', 'url'=>array('/site/index')),
            		),),
					array('label'=>'Contacto', 'url'=>array('/site/contact')),
					//array('label''label'=>'Educación Tecnologíca', 'url'=>array('/site/index')=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Acceso"), 'visible'=>Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Registrate"), 'visible'=>Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Perfil"), 'visible'=>!Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Salir").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
				),	
			)); ?>
		</div><!-- mainmenu -->
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
        
      </div>
    </div>
  </div>
</section>
<!-- header ends
================================================== -->
  <?php echo $content; ?>
<!-- footer starts
================================================== -->
<footer id="footer" class="clearfix">
  <div class="container"> 
    
    <!--row starts-->
    <div class="row">

      <!--column two starts-->
      <div class="span6">
        <h5>Get in touch</h5>
        <ul class="list-info">
          <li><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/icon-18-address.png" alt="icon" style="margin-bottom:30px;">Civic Studios, Inc.<br/>
            3245 East Creek Blvd, Suite 590<br/>
            Bos Boomer, IN 20076 </li>
          <li><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/icon-18-phone.png" alt="icon">+(99) 123 345 5678</li>
        </ul>
      </div>
      <!--column two ends--> 


      
      <!--column three starts-->
      <div class="span6">
        <ul class="list-info">
          <li><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/icon-18-mail.png" alt="icon"><a href="index.html#">support@company.com</a></li>
          <li><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/icon-18-skype.png" alt="icon" class="mar-btm"><a href="index.html#">http://skype.com/skypename</a></li>
        </ul>
      </div>
      <!--column three ends--> 
      
    </div>
    <!--row ends--> 
    
  </div>
</footer>
<!-- footer ends
================================================== --> 

<!-- copyright starts
================================================== -->
<section id="copyright" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p> © Copyright 2012</p>
        
        <!--copyright menu starts-->
        <ul class="copyright-menu">
          <li><a href="index.html#">Home</a></li>
          <li><a href="index.html#">Features</a></li>
          <li><a href="index.html#">Blog</a></li>
          <li><a href="index.html#">Company</a></li>
          <li><a href="index.html#">Portfolio</a></li>
          <li><a href="index.html#">Contact</a></li>
        </ul>
        <!--copyright menu ends--> 
        
      </div>
    </div>
  </div>
</section>
<!-- copyright ends
================================================== --> 

<!--other jqueries required--> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ddsmoothmenu.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/twitter.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js" type="text/javascript" ></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js" type="text/javascript" ></script>
</body>
</html>