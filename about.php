<?php include( "partials/header.php" ); ?>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        <?php 
		$page = 'about';
		?>
        <?php include( "partials/menu.php" ); ?>
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>关于我们</h1>
                    <div class="breadcrumb">
                        <a href="index.php">主页</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">关于我们</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
                    
                    <div class="column dt-sc-one-half first">
                    	<div class="about-slider-wrapper">
                            <ul class="about-slider">
                                <li> <img src="images/activity1.jpg" alt="" title=""> </li>
                                <li> <img src="images/activity2.jpg" alt="" title=""> </li>
                                <li> <img src="images/activity3.jpg" alt="" title=""> </li>
                            </ul>
                        </div>	
                    </div>
                    
                    <!--dt-sc-one-half starts-->
                    <div class="column dt-sc-one-half">                  
                    	<h2>明睿教育简介</h2>
                        <p>MERRY Education 明睿教育，是一家南京领先的教育培优机构，以品质领先、人才亲密、成就客户为发展的核心目标。自创立以来，一直致力于寻找最优秀的老师，提供最高品质的教学，为孩子创造更美好的学习体验。目前已分别在仙林和市区虹桥开设两个教学点。</p>
                        <a href="#" class="dt-sc-button small read-more"> 了解更多 <span class="fa fa-chevron-circle-right"> </span></a>   
                    </div> 
                    <!--dt-sc-one-half ends-->
                    
                    <div class="dt-sc-hr"></div>
                    
                    <!--dt-sc-one-half starts-->
                    
                    <div class="dt-sc-one-half column first">
	                    <!--
                    	<h2>Meet Our Founder</h2> 
                        <div class="author-details">
                        	<div class="author-thumb">
                                <img class="item-mask" src="images/author-hexa-bg.png" alt="" title="">
                                <img src="http://placehold.it/119x101" alt="" title="">
                            </div>
                            <div class="author-description">
                                <h5><a href="">James Bond</a></h5>
                                <span class="author-role">Music Trainer, Specialist in  <a href="#">Classical Music</a></span>
                                
                                <a href="#" class="students-count"><span class="fa fa-user"></span> 25 STUDENTS</a>
                                <div class="rating-review">
                                	<span class="author-rating rating-4"></span> <a href="#">2 reviews</a>
                                </div>
                                <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in, </p>
                        	</div>
                        </div>
                        -->
                    </div>     
                    <!--dt-sc-one-half ends--> 
                    <!--dt-sc-one-half starts-->
                    <div class="dt-sc-one-half column"> 
                    	<h2>家长的话</h2>
                        <div class="dt-sc-testimonial-carousel-wrapper">
                            <ul class='dt-sc-testimonial-carousel'> 
                                <li>
                                    <div class='dt-sc-testimonial'>
                                    	<blockquote><q>得知明睿开班的消息我们太开心了，原来我们需要跑到市区才能找到高质量的辅导机构，现在在家门口就可以很轻松的解决小孩子上数学辅导班的问题了。</q></blockquote>
                                        <div class='author'>
                                            <img src="http://placehold.it/69x70" alt="" title="">
                                        </div>
                                        <div class="author-meta">
                                        	<p> Lily 妈妈 </p>
                                            <span> 三年级 - 仙林东方天郡</span>
                                            <!--<span class="author-rating rating-4"></span>-->
                                    	</div>        
                                    </div>
                                </li>
                            </ul>
                            <div class="carousel-arrows">	
                                <a href="#" class="testimonial-prev"><span class="fa fa-angle-left"></span></a>	
                                <a href="#" class="testimonial-next"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>      
                    <!--dt-sc-one-half ends--> 
                    
                    <div class="dt-sc-hr"></div>
                    
<?php include( "partials/teachers_columns.php" ); ?>
                    
                    <!--
                    <div class="dt-sc-hr"></div>
                    <h2>Our Sponsors</h2>
                    <div class="dt-sc-sponsor-carousel-wrapper">                    
                        <ul class="dt-sc-sponsor-carousel">
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                            <li> <a href="" title=""> <img src="http://placehold.it/206x116" alt="" title=""> </a> </li>
                        </ul>
                        
                        <div class="carousel-arrows">
                            <a class="sponsor-prev" href=""> </a>
                            <a class="sponsor-next" href=""> </a>
                        </div>
                    </div>
                    -->
                    
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        <!--footer starts-->
<?php include( "partials/footer.php" ); ?>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
