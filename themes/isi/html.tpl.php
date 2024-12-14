<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
	<head profile="<?php print $grddl_profile; ?>">
		<?php print $head; ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="tourism.">
		<meta name="author" content="Aranax Technologies Pvt Ltd">
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<!-- HTML5 element support for IE6-8 -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php print $scripts; ?>
		<script type="text/javascript">jQuery(function($) { $('.navbar .dropdown').hover(function() { $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown(); }, function() { $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp(); }); $('.navbar .dropdown > a').click(function(){ location.href = this.href; }); });</script>
		
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>