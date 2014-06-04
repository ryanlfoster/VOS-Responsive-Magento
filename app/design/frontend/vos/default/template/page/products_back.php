<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $this->getChildHtml('head') ?>
	<link href="/images/vostpl.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	</style>
	<script type="text/javascript" src="/images/jquery.magnifier.js"></script>
</head>

<div id="outer">
	<div id="inner">
		<div id="vosheadernav">
		
			<div id="nav_vos">
			<a href="/homepage"><img onmouseover="this.src='/images/menu/products-rollover.png'" onmouseout="this.src='/images/menu/products.png'" border="0" src="/images/menu/products.png" alt="Products" ></a>
			<a href="/about"><img onmouseover="this.src='/images/menu/about-rollover.png'" onmouseout="this.src='/images/menu/about.png'" border="0" src="/images/menu/about.png" alt="About" ></a>
			<a href="/this-and-that"><img onmouseover="this.src='/images/menu/thisthat-rollover.png'" onmouseout="this.src='/images/menu/thisthat.png'" border="0" src="/images/menu/thisthat.png" alt="This and That" ></a>
			<a href="/contact"><img onmouseover="this.src='/images/menu/contact-rollover.png'" onmouseout="this.src='/images/menu/contact.png'" border="0" src="/images/menu/contact.png" alt="Contact" ></a>
			</div>
			
			<div id="vos-social-buttons">
			<a href="http://www.facebook.com/pages/Vikings-Of-Skate/160887060630674/">
			<img onmouseover="this.src='/images/icons/facebook-rollover.png'" onmouseout="this.src='images/icons/facebook.png'" border="0" src="/images/icons/facebook.png" alt="Facebook" width="40" height="40"></a>
			<a href="http://twitter.com/vikingsofskate/">
			<img onmouseover="this.src='/images/icons/twitter-rollover.png'" onmouseout="this.src='images/icons/twitter.png'" border="0" src="/images/icons/twitter.png" alt="Twitter" width="40" height="40"></a>
			<a href="http://pinterest.com/vikingsofskate/">
			<img onmouseover="this.src='/images/icons/pinterest-rollover.png'" onmouseout="this.src='images/icons/pinterest.png'" border="0" src="/images/icons/pinterest.png" alt="Pinterest" width="40" height="40"></a>
			<a href="http://instagram.com/vikingsofskate/">
			<img onmouseover="this.src='/images/icons/instagram-rollover.png'" onmouseout="this.src='images/icons/instagram.png'" border="0" src="/images/icons/instagram.png" alt="Instagram" width="40" height="40"></a>
			<a href="http://vikingsofskate.tumblr.com/">
			<img onmouseover="this.src='/images/icons/tumblr-rollover.png'" onmouseout="this.src='images/icons/tumblr.png'" border="0" src="/images/icons/tumblr.png" alt="Tumblr" width="40" height="40"></a>
			</div>
			
			<div id="navright">
			<a href="/checkout/cart"><img onmouseover="this.src='/images/bkb.png'" onmouseout="this.src='/images/bkw.png'" border="0" src="/images/bkw.png" alt="Basket"></a>
			<a href="/checkout"><img onmouseover="this.src='/images/ckb.png'" onmouseout="this.src='/images/ckw.png'" border="0" src="/images/ckw.png" alt="Checkout"></a>
			</div>
			
		</div>
		
	<div id="pro_cat" style="margin-top:120px;"> 
		
		<?php echo $this->getChildHtml('global_notices') ?> <?php echo $this->getChildHtml('global_messages') ?> <?php echo $this->getChildHtml('content') ?> 
	
	</div>
	
	<div id="main">
		
		<div id="header"><img src="/images/products.png" width="425" height="230" border="0" usemap="#Map2" />
		<map name="Map2" id="Map2">
        <area shape="rect" coords="280,2,430,210" href="/about" />
		</map>
		</div>
		
		<div  style="padding-right:26px;"> <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('voscpd')->toHtml(); ?>
		<p align="justify" class="style1"><br />
		</p>
		<p class="style1"></p>
		</div>
		
	</div>
	
</div>