<?php include( "partials/header.php" ); ?>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <?php 
			$page = 'services';
		?>
        <?php include( "partials/menu.php" ); ?>
        <!--main starts-->
        <div id="main">
        	<!--fullwidth_banner starts-->
            <section class="fullwidth_banner">
            	<div class="container">
	            	<h1>Math Class</h1>
                </div>
            </section>
            <!--fullwidth_banner ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                <!--container starts-->
                <div class="container">
                	<h2 class="dt-sc-hr-green-title">课程概览</h2> 
                    
                    <!--dt-sc-one-half starts-->
                    <div class="dt-sc-one-half column first">
                        <div class="dt-sc-toggle-frame-set">
                            <div class="dt-sc-toggle-frame">
                                <h5 class="dt-sc-toggle-accordion active"><a href="#">我们是谁</a></h5>
                                <div class="dt-sc-toggle-content">
                                    <div class="block">
                                        我们的大部分老师毕业于南大等名校，并且有着丰富的教学经验。
                                    </div>
                            	</div>
                            </div>
                            <div class="dt-sc-toggle-frame">
                                <h5 class="dt-sc-toggle-accordion"><a href="#">我们做什么</a></h5>
                                <div class="dt-sc-toggle-content">
                                    <div class="block">
                                        我们致力于提供高品质的数学培优课程，帮助小朋友提高数学学习兴趣，解决数学学习中的各种问题。
                                    </div>
                            	</div>
                            </div>
                            <div class="dt-sc-toggle-frame">
                                <h5 class="dt-sc-toggle-accordion"><a href="#">我们提供怎样的课程</a></h5>
                                <div class="dt-sc-toggle-content">
                                    <div class="block">
                                        我们每个季度都有辅导班供报名，此外，我们不定期还提供短期辅导班，公开课，或者数学兴趣讲座。
                                    </div>
                                </div>
                            </div>
                    	</div>
                    </div>
                    <!--dt-sc-one-half ends-->
                    
                    <!--dt-sc-one-half starts-->
                    <div class="column dt-sc-one-half">                  
                        <div class="dt-sc-toggle-frame-set course">
                            <h5 class="dt-sc-toggle-accordion "><a href="#">优秀的教研内容</a></h5>
                            <div class="dt-sc-toggle-content">
                                <div class="block">
                                    我们投入相当的精力，提供最优秀的教研内容。
                                </div>
                            </div>
                            <h5 class="dt-sc-toggle-accordion "><a href="#">合理的课程安排</a></h5>
                            <div class="dt-sc-toggle-content">
                                <div class="block">
                                    合理的时间安排和课程时长可以有效的帮助学生提高学习效率。
                                </div>
                            </div>
                            <h5 class="dt-sc-toggle-accordion "><a href="#">家长和学生的及时沟通</a></h5>
                            <div class="dt-sc-toggle-content">
                                <div class="block">
                                    及时沟通可以帮助发现学习中的问题，也可以帮忙改进教学活动。
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--dt-sc-one-half ends-->
                       
                </div>
                <!--container ends-->
                <div class="dt-sc-hr"></div>
                
                <!--?php include( "partials/events.php" ); ?-->
                
                <div class="dt-sc-hr"></div>  
                    <!--fullwidth-background starts-->
                    <section class="fullwidth-background turquoise-plain-bg">
                        <!--container starts-->
                        <div class="container"> 
                        	<h2 class="dt-sc-hr-white-title">Admission Form</h2> 
                            <form method="post" action="php/admissionmail.php" id="admissionform" name="admissionform" class="admission-form">
                                <p class="dt-sc-one-third column first">
                                    <input id="name" name="txtname" type="text" placeholder="Name" required="">
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="age" name="txtage" type="text" placeholder="Age" required="">
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="course" name="txtcourse" type="text" placeholder="Course" required="">
                                </p>
                                <p>
                                	<textarea id="admission" name="txtmessage" placeholder="Message"></textarea>
                                </p>
                                <div id="ajax_admission_msg"> </div>
                                <p class="aligncenter">
                                    <input name="submit" type="submit" id="submit" value="Submit Form">
                                </p>
                            </form>
                        </div>
                        <!--container ends-->
                    </section>
                    <!--fullwidth-background ends--> 
            </section>
            <!--primary ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
<?php include( "partials/footer.php" ); ?>