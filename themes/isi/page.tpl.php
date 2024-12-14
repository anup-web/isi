<!--<header id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top yamm">-->

<div class="page-top">
			<header id="header" role="banner" class="navbar navbar-static">
				<nav id="top-nav">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<nav id="global-nav">
									<ul>									    
										
										<li class="dropdown top_menu">
                                         <a data-toggle="dropdown" href="#">People <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu topmenu_dropdown">
												<li><a href="http://localhost/isi1/faculty">Faculty/Staff</a></li>
												<li><a href="">Students</a></li>
												<li><a href="">Alumni</a></li>
												<li><a href="">Retired Employees</a></li>												
											</ul>
										</li>
										<li>
											<a href="#">Visitors</a>
										</li>
										<li class="dropdown top_menu">
                                         <a data-toggle="dropdown" href="#">Divisions and Units <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu topmenu_dropdown">
												<li><a href="http://localhost/isi1/divisions-units/computer-science">Computer Science</a></li>
												<li><a href="">Teaching and Training Division</a></li>
												<li><a href="">Social Sciences Division</a></li>
												<li><a href="">Associate Institutions</a></li>
												<li><a href="">Biological Sciences Division</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Webmail</a>
										</li>
										<li>
											<a href="#">Directory</a>
										</li>
									</ul>	
								</nav>
							</div>	
						</div>
					</div>					
					
							<div id="main-nav">
							<nav class="navbar" role="navigation">
							<div class="container">						
						    <div class="navbar-header header_navbars">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand brand_bar" href="<?php print $front_page; ?>">
								<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
							</a>
							<h1>Indian Statistical Institute</h1>
						</div>						
						<div class="aranax-nav">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <?php print render($page['header']); ?>							
						</div>
						</div>						
					</div>					
				</nav>
				</div>				
				</nav>
			</header>
		</div>	

<!--HOMEPAGE CONTENT-->
<?php if($is_front):?>  
	
<?php print render($page['home_featured']); ?>

<?php

$title = ''; // This is optional ... it removes the default Welcome to @site-name
$page['content']['system_main']['default_message'] = array(); // This will remove the 'No front page content has been created yet.'
?>

<?php endif; ?>
<!--HOMEPAGE CONTENT END-->

<!--INSIDE PAGE HEADER-->
<?php if(!$is_front):?>
<?php if($page['page_header']):?>
<div class="banner">
	<div class="container ">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="banner-bg">
					<div class="main-heading">
						<h1>
							<?php print render($page['page_header']); ?>
						</h1>
					</div>
				</div>        
			</div>
		</div>	        
	</div>
</div>
<?php endif; ?>
<!--INSIDE PAGE HEADER END-->

<!--INSIDE PAGE CONTENT-->
<?php if($page['content']):?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p class="page-content">
				<?php print render($page['content']); ?>
			</p>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>	
<!--INSIDE PAGE CONTENT END-->

<!--FOOTER CONTENT-->
<?php print render($page['footer_links']); ?>
<?php print render($page['footer_copyright']); ?>
<!--FOOTER CONTENT END-->
