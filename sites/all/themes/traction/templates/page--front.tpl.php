	<div id="pg-nav-bg">
		<div class="wrapper container-12 clearfix">
			<!--<div id="pg-nav" class="menu-top-menu-container" >
				<?php if ($primary_nav): print $primary_nav; endif; ?>
       </div>-->
       <div id="nav" >
              <?php 
          if (module_exists('i18n')) { 
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
              <?php //if ($page ['primarynav']): ?>
                <!--<div class="primarynav prefix-1 grid-7">
                  <?print render($page['primarynav']); ?> 
                </div>-->
              <?php //endif; ?>
              </div>
     </div><!--end wrapper-->
	</div><!--end page-navigation-bg-->
	<div class="wrapper big">
		<div id="header" class="clear">
							<div class="logo grid-12">
					 <?php if ($logo): ?>
          <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
            <!--<img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" />-->
            <article class='title'>
            	<h1 class='sitename'>Languistica</h1>
            	<h2 class='subtitle'>French Course Lausanne</h2>
            </article>             
          </a>

          <div class='contact'>Contact Us: <br> 
          	<a href="tel:+41786040105">+41 78 604 01 05</a>
      	  </div>

      	  <hr class='titleunder'>

        	<?php endif; ?>
		</div><!--end logo-->
		<!--<div id="cat-nav" class="grid-12">
			<?php if ($secondary_nav): print $secondary_nav; endif; ?>
		</div>	-->	
	</div>
	<!--end header-->
					<!--<div class="feature-top clear"></div>
<div id="feature" class="container-16 clearfix" >
	<div class="grid-11 omega">
		<?php print render($page ['featured']); ?>			
	</div>-->
	<!--end feature-main-->
	<!--<div class="grid-5 alpha">
		<?php print render($page ['featured_sidebar']); ?><div class="clear"></div>
			</div>
		</div>
<div class="feature-bottom clear"></div>	-->


<div id="main-top" class="container-16">
		<div class="grid-11"><h4>News Feed</h4></div>
		<?php if ($page['ads'] || $page['sidebar_second']): ?>
		  <div class="grid-5">
			  <?php print render($page['subscribe']); ?>	
    	</div>	
    <?php endif; ?>
	</div>

	<div id="main" class="container-16 clear">
		<div id="content" class="grid-11 alpha omega">
			<?php print $messages; ?>
			<?php if ($tabs): ?>
            <?php print render($tabs); ?>
      <?php endif; ?>
			<?php if ($page['content']): ?>
  			<?php print render($page['content']); ?>
			<?php endif; ?>										
		</div><!--end content-->
		<?php if ($page['ads'] || $page['sidebar_second']): ?>
		  <div id="sidebar" class="grid-5 alpha omega">
		    <?php if ($page['ads']): ?>
			    <?php print render($page['ads']); ?>		
			  <?php endif; ?> 
			  <?php if ($page['sidebar_second']): ?>
  			  <?php print render($page['sidebar_second']); ?>				
  			<?php endif; ?>	
	  	</div><!--end sidebar-->	
		<?php endif; ?>	
	</div>
	<div id="main-bottom"></div>
</div><!--end wrapper-->



<div id="footer" >


	<hr>
	
	<div class="wrapper container-12 clearfix">
		<div  class="footer-column  grid-4">
        	
			  <?php print render($page['footer_first']); ?>  
			  
			  
		</div>
		<div class="footer-column  grid-4">
     	 <?php print render($page['footer_second']); ?>
		</div>
		<div class="footer-column  grid-4">
			  <?php print render($page['footer_third']); ?>		

	
		</div>
		
	</div><!--end wrapper-->
</div><!--end footer-->
<div id="copyright" class="wrapper container-12 clearfix">
	<div class="grid-5">
		Theme by Setrino&copy; 2013
				
	</div>
</div>

<script type='text/javascript' src='sites/all/themes/traction/js/jquery.js'></script>
<script type='text/javascript' src='sites/all/themes/traction/js/cleanup.js'></script>
