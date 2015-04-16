<!--header starts-->
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php" title="Kids Life"><img src="images/logo.png" alt="明睿教育" title="明睿教育"></a>
                </div>
                <div class="contact-details">
                    <p class="mail">
                        <a href="#">wxy@merryedu.com</a>
                        <span class="fa fa-envelope"></span>
					</p>
                    <p class="phone-no">
                        <i>13951822908</i>
                        <span class="fa fa-phone"></span>
                	</p>        
                </div>
            </div>
            <!--menu-container starts-->
            <div id="menu-container">
                <div class="container">
                    <!--nav starts-->
                    <nav id="main-menu">
                    	<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                        <ul id="menu-main-menu" class="menu">
                            <li class="<?php if ($page=='home') { echo('current_page_item') ; } ?> menu-item-simple-parent menu-item-depth-0 red"> <a href="index.php"> 主页 </a> 
                            <!--
                                <ul class="sub-menu">
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a>  </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> 
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a>  </li>
                                        </ul>   
                                        <a class="dt-menu-expand">+</a>                             
                                    </li>
                                </ul>  
                                <a class="dt-menu-expand">+</a>
                            -->                      
                            </li>
                            <li class="<?php if ($page=='about') { echo('current_page_item') ; } ?> mustard"> <a href="about.php"> 关于我们 </a> </li>
                            <li class="<?php if ($page=='staff') { echo('current_page_item') ; } ?> green"> <a href="our-staffs.php"> 我们的教师 </a> </li>
                            <li class="<?php if ($page=='services') { echo('current_page_item') ; } ?> yellow"> <a href="services.php"> 课程 </a> </li>
                            <!--
                            <li class="<?php if ($page=='portfolio') { echo('current_page_item') ; } ?> menu-item-simple-parent menu-item-depth-0 blue"><a href="portfolio-four-column.php" title="">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-four-column.php">Portfolio Four Column</a></li>
                                    <li><a href="portfolio-three-column.php">Portfolio Three Column</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio-three-column-with-sidebar.php">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            
                            <li class="<?php if ($page=='pages') { echo('current_page_item') ; } ?> menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 steelblue"> <a href="#" title=""> Pages </a> 
                            
                                <div class="megamenu-child-container">
                                    <ul class="sub-menu">
                                        <li> <a href="#">Useful Shortcodes</a>
                                            <ul class="sub-menu">
                                                <li> <a href="shortcodes.php">Typography </a> </li>
                                                <li><a href="buttons-lists.php" title="">Buttons &amp; Lists</a></li>
                                                <li><a href="columns.php" title="">Columns</a></li>
                                                <li><a href="fancy-boxes.php" title="">Fancy Boxes</a></li>
                                                <li><a href="icon-boxes.php" title="">Icon Boxes</a></li>
                                                <li><a href="pricing-tables.php" title="">Pricing Tables</a></li>
                                                <li><a href="progressbars.php" title="">Progress Bars</a></li>
                                                <li><a href="quotes.php" title="">Quotes</a></li>
                                    			<li><a href="tabs-toggles.php" title="">Tabs &amp; Toggles</a></li>
                                            </ul>
                                            <a class="dt-menu-expand">+</a> 
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area">
                                            <a href="#">热门课程</a>
                                            <div class="menu-item-widget-area-container">
                                                <ul>
                                                    <li class="widget widget_popular_products">
                                                        <ul class="product_list_widget">
                                                            <li>
                                                                <a href="#" title="">
                                                                <img src="http://placehold.it/70x70" alt="product"> 二年级春季数学(100分钟) </a>
                                                                <span class="amount">￥120.00</span>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="">
                                                                <img src="http://placehold.it/70x70" alt="product"> 三年级春季数学(120分钟) </a>
                                                                <span class="amount">￥150.00</span>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="">
                                                                <img src="http://placehold.it/70x70" alt="product"> 春季数学短期班 </a>
                                                                <span class="amount">即将开设...</span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area  fill-two-columns">
                                            <a href="#">Featured Blog</a>
                                            <div class="menu-item-widget-area-container">
                                            	<ul>
                                                	<li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="blog-detail.php"><img src="http://placehold.it/200x137" alt="" title=""></a>
                                                        </div>
                                                        <div class="entry-body">
                                                        	<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.</p>
                                                        </div>
                                                        <div class="entry-details">
                                                        	<div class="entry-title">
                                                            	<h5><a href="blog-detail.php"> Create your Works </a></h5>
                                                            </div>
                                                            <div class="entry-metadata">
                                                            	<p class="author"><a href="#"> By Admin </a></p>
                                                                <span class=""> | </span>
                                                                <p class="comments"><a href="#"><span class="fa fa-comment"></span></a></p>
                                                                <p class="date"> 10 Aug </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="blog-detail.php"><img src="http://placehold.it/200x137" alt="" title=""></a>
                                                        </div>
                                                        <div class="entry-body">
                                                        	<p>Minima ve nostrum exercita tionem ullam corporis suscipit laboriosam, nisi ut aliquid ex.</p>
                                                        </div>
                                                        <div class="entry-details">
                                                        	<div class="entry-title">
                                                            	<h5><a href="blog-detail.php"> Best of the Blogs </a></h5>
                                                            </div>
                                                            <div class="entry-metadata">
                                                            	<p class="author"><a href="#"> By Admin </a></p>
                                                                <span class=""> | </span>
                                                                <p class="comments"><a href="#"><span class="fa fa-comment"></span></a></p>
                                                                <p class="date"> 10 Aug </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="dt-menu-expand">+</a>
                            </li>
                            -->
                            <li class="<?php if ($page=='blog') { echo('current_page_item') ; } ?> menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog.php" title="">博客</a>
                            <!--
                                <ul class="sub-menu">
                                    <li><a href="blog-two-column.php">Blog Two Column</a>
                                    	<ul class="sub-menu">
                                            <li><a href="blog-two-column-with-sidebar.php">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li><a href="blog.php">Blog One Column</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-with-sidebar.php">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                                <a class="dt-menu-expand">+</a>
                            -->
                            </li>
                            <!--
                            <li class="<?php if ($page=='shop') { echo('current_page_item') ; } ?> purple"><a href="shop.php" title="">Shop</a></li>-->
                            <li class="<?php if ($page=='contact') { echo('current_page_item') ; } ?> pink"><a href="contact.php" title="">联系我们</a></li>
                        </ul>
                    </nav>
                    <!--nav ends-->

                    <ul class="dt-sc-social-icons">
                        <li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="#" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" title="Google Plus" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <!--menu-container ends-->
        </header>
        <!--header ends-->