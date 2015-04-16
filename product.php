<?php include( "partials/header.php" ); ?>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        <?php 
			$page = 'shop';
		?>
        <?php include( "partials/menu.php" ); ?>
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Pretty Little Girl</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Pretty Little Girl</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="with-sidebar">
                
                	<div class="images">
                    	<a href="#">
                            <img src="http://placehold.it/510x716" alt="" title="">
                        </a> 
                    </div>
                    <div class="summary">
                    	<h2>Pretty Little Girl</h2>
                        <p class="price">
                        	<del>$120</del>
                            <span>$100</span>
                        </p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo</p>
                        <ul class="dt-sc-fancy-list gift">
                            <li>Lorem ipsum dolor sit euismod diam pulvinar massa nec augue</li>
                            <li>Praesent convallis nibh ollicitudin sit amet massa nec augue</li>
                            <li>Nullam ac sapien sit ac malesuada arca in aliquam odio inter</li>
                        </ul>
                        <form class="cart" method="post" action="#">
                            <div class="quantity buttons_added">
                                <input type='button' value='-' class='qtyminus'>
                                <input type='number' name='quantity' value='0' class='qty'>
                                <input type='button' value='+' class='qtyplus'>
                            </div>
                            <input type="hidden" name="add-to-cart" value="1146">
                            <button type="submit" class="dt-sc-button medium">Add to cart</button>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categories: <a href="#">Gosh</a>, <a href="#" rel="tag">Cool</a></span>
                        </div>
                    </div>
                    
                    <div class="dt-sc-hr"></div>
                    
                    <!--dt-sc-tabs-container starts-->            
                    <div class="dt-sc-tabs-container">
                        <ul class="dt-sc-tabs">
                            <li><a href="#"> Description </a></li> 
                            <li><a href="#"> Reviews (5) </a></li>
                        </ul>
                        <div class="dt-sc-tabs-content">
                            <h2>Product Description</h2>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi sagittis. Integer enim odio. In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                        </div>
                        <div class="dt-sc-tabs-content">
                            <h2>4 Reviews for Pretty Little Girl</h2>
                            <div id="comments">
                            	<ol class="commentlist">
                                	<li>
                                    	<div class="comment_container">
                                        	<img src="http://placehold.it/100x100" alt="" title="">
                                        </div>
                                        <div class="comment-text">
                                        	<div class="rating-review">
                                                <span class="author-rating rating-5"></span> <a href="#">5 reviews</a>
                                            </div>
                                            <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio. In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!--dt-sc-tabs-container ends-->
                    
                    <div class="related">
                     
                 	<h2>Related Products</h2>
                        <ul class="products">
                           
                            <li class="dt-sc-one-third column first">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                            <li class="dt-sc-one-third column">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                            <li class="dt-sc-one-third column">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <!--primary ends-->
                
                <!--secondary starts-->
                <section id="secondary">
                
                	<aside class="widget widget_categories">
                    	<h3 class="widgettitle">Categories</h3>
                        <ul>
                        	<li>
                            	<a href="">Play School<span>(16)</span></a>
                            </li>
                            <li>
                            	<a href="">Academic Performance<span>(3)</span></a>
                            </li>
                            <li>
                            	<a href="">Co-curricular<span>(26)</span></a>
                            </li>
                            <li>
                            	<a href="">Visual Education<span>(18)</span></a>
                            </li>
                            <li>
                            	<a href="">Inter Competition<span>(4)</span></a>
                            </li>
                        </ul>
                    </aside>
                	
                    <aside class="widget widget_text">
                        <h3 class="widgettitle">Kids Achievements</h3>
                        <p>In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique <a href="#" class="highlighter">senectus</a> et netus et malesuada fames ac turpis egestas. </p>
                        <p>Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi sagittis. Integer enim odio.</p>
					</aside>
                    
                    <aside class="widget widget_text">
                    	<h3 class="widgettitle">Visual Guidance</h3>
                        <p>Our methods of teaching and level of quality instructors all add up to a well-rounded experience.</p>
                    	<iframe src="http://player.vimeo.com/video/21195297" width="420" height="200"></iframe>
                    </aside>
                    
                    <aside class="widget widget_recent_entries">
                    	<h3 class="widgettitle">Kids Voices</h3>
                    	<!--dt-sc-tabs-container starts-->            
                        <div class="dt-sc-tabs-container">
                            <ul class="dt-sc-tabs">
                                <li><a href="#"> New </a></li> 
                                <li><a href="#"> Popular </a></li>
                            </ul>
                            <div class="dt-sc-tabs-content">
                                <h5><a href="">Explore your Thoughts!</a></h5>
                                <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                                <h5><a href="">Perform for Success!</a></h5>
                                <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque laudantium.</p>
                            </div>
                            <div class="dt-sc-tabs-content">
                                <h5><a href="">Admire &amp; Achieve!</a></h5>
                                <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque laudantium.</p>
                                <h5><a href="">Your Opportuntiy!</a></h5>
                                <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                            </div>
                        </div>
                        <!--dt-sc-tabs-container ends-->
                    </aside>
                    
                    <aside class="widget widget_tag_cloud">
                    	<h3 class="widgettitle">Hit on Tags</h3>
                        <div class="tagcloud">
                        	<a href="">Listen</a>
                            <a href="">Observe</a>
                            <a href="">Admire</a>
                            <a href="">Accomplish</a>
                            <a href="">Perform</a>
                            <a href="">Achieve</a>
                            <a href="">Target</a>
                        </div>
                    </aside>
                    
                </section>
                <!--secondary ends-->
                
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
<?php include( "partials/footer.php" ); ?>
