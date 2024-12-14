<!--<header id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top yamm">-->

<div class="page-top">
			<header id="header" role="banner" class="navbar navbar-static">
				<nav id="top-nav">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<nav id="global-nav">
									<ul>
										<li>
											<a href="#">People</a>
										</li>
										<li>
											<a href="#">Visitors</a>
										</li>
										<li class="dropdown top_menu">
                                         <a data-toggle="dropdown" href="#">Divisions and Units <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu topmenu_dropdown">
												<li><a href="">Item 1</a></li>
												<li><a href="">Item 2</a></li>
												<li><a href="">Item 3</a></li>
												<li><a href="">Item 4</a></li>
												<li><a href="">Item 5</a></li>
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
						<div class="container">
							<div class="row">
								<div class="col-sm-1">
									<a href="<?php print $front_page; ?>">
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
						    </a>
								</div>
								<div class="col-sm-5">
									<h1>Indian Statistical Institute</h1>
								</div>
								<div class="col-sm-6">
									<div class="wrapper-main-nav">
										<div class="navbar" role="banner">
											<div class = "navbar-header">
												  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
												   <span class="sr-only">Toggle navigation</span>
												   <span class="icon-bar"></span>
												   <span class="icon-bar"></span>
												   <span class="icon-bar"></span>
												</button>

											  
											   </div>
											
											<div class="aranax-nav">
									<div class="collapse navbar-collapse">
										<?php print render($page['header']); ?>
									</div>
								</div>
											
											<!--<div class="aranax-nav">
												<div class="collapse navbar-collapse">
													<ul class="nav navbar-nav">
														<li class="first leaf active">
															<a class="active" href="#">ACADEMICS</a>
														</li>
														<li class="leaf">
															<a href="#">RESEARCH</a>
														</li>
														<li class="leaf">
															<a href="#">NEWS & EVENTS</a>
														</li>
														<li class="leaf">
															<a href="#">ABOUT</a>
														</li>
													</ul>
												</div>
											</div> -->	
													
										</div>
									</div>	
										
								</div>
								<!--<div class="col-sm-2">
								<form class="search-box-home">
								<div class="slider-search-bar">
								<label for="search-slider">
								<input id="search-slider" type="search" placeholder="keyword">
								</label>
								<button><i class="fa fa-search"></i></button>
								</div>	
								</form>
								</div>-->	
								
							</div>
						</div>
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
