<!doctype html>
<?php
require_once(dirname(__FILE__).'/functions.php'); 
global $theme;
global $modules;
global $accounts;
global $navigation;
global $site;
global $pages;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site->SiteName(); ?> - Home</title>
<link rel="stylesheet" href="<?php $theme->ThemeScript(); ?>styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
acceler, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<script type="text/javascript" src="<?php $theme->ThemeScript(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php $theme->ThemeScript(); ?>js/slider.js"></script>
<script type="text/javascript" src="<?php $theme->ThemeScript(); ?>js/superfish.js"></script>

<script type="text/javascript" src="<?php $theme->ThemeScript(); ?>js/custom.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container">

    <header>
	<div class="width">
    		<h1><a href="/"><?php echo $site->SiteName(); ?></a></h1>

		    <nav>
			
    			<ul class="sf-menu dropdown"><!--
        	<li class="selected"><a href="index.html">Home</a></li>
            <li><a class="has_submenu" href="examples.html">Examples</a>
            	<ul>
                	<li><a href="noslides.html">Static Text Page</a></li>
                    <li><a href="page.html">Static Frontpage</a></li>
                    <li><a href="#">Another link</a></li>
                </ul>
            </li>
	     <li><a href="three-column.html">Three Column</a></li>
            <li><a class="has_submenu" href="#">Products</a>
            	<ul>
                	<li><a href="#">Product One</a></li>
                    <li><a href="#">Product Two</a></li>
                    <li><a href="#">Product Three</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>-->
			<?php $navigation->LoadMainMenu(); ?>
        </ul>
	
    			</nav>
       	</div>

	<div class="clear"></div>

	<?php $acceler->SlideShow(); ?>


    </header>




    <div id="body" class="width">



		<section id="content" class="two-column with-right-sidebar">

	    <article>
				
			
			<h2><?php echo $pages->StaticTitle(); ?></h2>
			<?php echo $pages->StaticBody(); ?>
            


		
		</article>
	
		<article class="expanded">


		</article>
        </section>
        
        <aside class="sidebar big-sidebar right-sidebar">
	
	
            <ul>	
               <?php $modules->ModulesRight(); ?>
			</ul>
                </li>
                
            </ul>
		
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
 <?php require_once('assets/footer.php'); ?>
        <div class="footer-bottom">
            <p>&copy; <?php echo $site->SiteCopyright(); ?> 2014. <a href="http://zypopwebtemplates.com/">Free HTML5 Templates</a> by ZyPOP</p>
			<p>Report All Errors to our <?php echo $site->WebmasterLink(); ?></p>
         </div>
    </footer>
</div>
</body>
</html>