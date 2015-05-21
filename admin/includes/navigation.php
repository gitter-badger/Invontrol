            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <?php
					function createmenu() {
						$menuitems = array(
						'Overview'=>'index.php',
						'Pages'=>'page.php',
						'Users'=>'users.php',
						);
						
						foreach($menuitems as $menuitem => $link){
							?>
							<li><a href="<?php echo $link; ?>">
							<div class="icon-bg bg-grey"></div>
							<span class="menu-title"><?php echo $menuitem; ?></span></a>
							</li>
							<?php
						}
					}
					?>
					<div class="clearfix"></div>
					<?php createmenu(); ?>
					<?php global $modules; $modules->LoadAdminBackend(); ?>
					
                </ul>
            </div>
        </nav>