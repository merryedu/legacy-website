<?php include( "partials/header.php" ); ?>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        	    <?php 
		$page = 'contact';
		?>
        <?php include( "partials/menu.php" ); ?>
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>联系我们</h1>
                    <div class="breadcrumb">
                        <a href="index.php">主页</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">联系我们</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZTnglUUopg2HSY2QAM7n9k4N"></script>
            	<section id="primary" class="content-full-width">
				
					<div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>
                    
                    <div class="dt-sc-hr"> </div>
                    
                    <!--dt-sc-two-third starts-->
                    <div class="column dt-sc-three-fourth first contact_form_outer">
                        <form name="frcontact" class="contact-form" method="post" action="php/contactmail.php">
                        	<h2>期待你的反馈!</h2>
                            <p class="column dt-sc-one-third first">
                                <input id="name" name="txtname" type="text" placeholder="Name" required="">
                            </p>
                            <p class="column dt-sc-one-third">
                                <input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
                            </p>
                            <p class="column dt-sc-one-third">
                            	<input id="subject" name="txtsubject" type="text" placeholder="Subject" required="">
                            </p>
                            <p>
                            	<textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
                            </p>
                            <div id="ajax_contact_msg"> </div>
                            <p>
                                <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">
                            </p>
                        </form>
                    </div>
                    <!--dt-sc-two-third ends-->
                    
                    <!--dt-sc-one-third starts-->
                    <div class="column dt-sc-one-fourth class_hours">
                    	<h2>春季课程时间</h2>
                        <ul class="class_hours">
                        	<li>星期一<span>仙林(6:30pm - 8:30pm)</span></li>
                            <li>星期二<span>暂无</span></li>
                            <li>星期三<span>暂无</span></li>
                            <li>星期四<span>暂无</span></li>
                            <li>星期五<span>仙林(4:00pm - 6:00pm), 仙林(6:30pm - 8:00pm)</span></li>
                            <li>星期六<span>虹桥(10:00am - 8:30pm)</span></li>
                            <li>星期日<span>仙林(1:00pm - 3:00pm)</span></li>
                        </ul>
                        <div class="dt-sc-hr-small"></div>
                        <p><strong><span class="highlighter">我们十分关心</span> 你的宝贝</strong></p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="#" title="Facebook" class="dt-sc-tooltip-bottom"><img src="images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="#" title="Twitter" class="dt-sc-tooltip-bottom"><img src="images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="#" title="Google Plus" class="dt-sc-tooltip-bottom"><img src="images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="#" title="Pinterest" class="dt-sc-tooltip-bottom"><img src="images/pinterest.png" alt="" title=""></a></li>
                        </ul>
                    </div>
                    <!--dt-sc-one-third ends-->
                    
                </section>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(118.923291,32.101833),16);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"我的备注",title:"明睿教育仙林教学点",imageOffset: {width:0,height:3},position:{lat:32.102643,lng:118.923381}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
<?php include( "partials/footer.php" ); ?>