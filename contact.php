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
	            	<h4>仙林教学点</h4>
                <h5>地址: 南京仙林大学城杉湖西路8号东方天郡西区23栋1单元103</h5>
                <h5>开放时间: 周二、周五14:00-20:30, 周六周日9:00-17:00</h5>
                <h5>联系电话: 131-828-12306</h5>
					<div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>

					<div class="dt-sc-hr-medium"></div>

					<h4>大行宫教学点</h4>
          <h5>地址: 中山东路198号龙台国际大厦12楼1215室</h5>
          <h5>开放时间: 周三、周四10:00-18:00，周五16:00-19:30, 周六周日9:00-18:00</h5>
          <h5>联系电话: 025-86906505</h5>
					<div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px" id="map2"></div>

                    <div class="dt-sc-hr"> </div>

                    <section class="fullwidth-background turquoise-plain-bg">
                        <!--container starts-->
                        <div class="container">
                          <script src="https://jinshuju.net/f/IU4oj9/embedded.js?banner=show&background=white&height=678"></script>
                          <!--
                        	<h2 class="dt-sc-hr-white-title">家长反馈</h2>
                            <form method="post" action="php/admissionmail.php" id="admissionform" name="admissionform" class="admission-form">
                                <p class="dt-sc-one-third column first">
                                    <input id="name" name="txtname" type="text" placeholder="姓名" required="">
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="grade" name="txtgrade" type="text" placeholder="年级" required="">
                                </p>
                                <p class="dt-sc-one-third column">
                                    <input id="teacher" name="txtteacher" type="text" placeholder="老师" required="">
                                </p>
                                <p>
                                	<textarea id="admission" name="txtmessage" placeholder="消息"></textarea>
                                </p>
                                <div id="ajax_admission_msg"> </div>
                                <p class="aligncenter">
                                    <input name="submit" type="submit" id="submit" value="提交">
                                </p>
                            </form>
                            -->
                        </div>

                        <!--container ends-->
                    </section>
                    <!--dt-sc-two-third ends-->

                    <!--dt-sc-one-third starts-->
                    <div class="column dt-sc-one-fourth class_hours">
                    	<h2>课程时间</h2>
                        <ul class="class_hours">
                            <li>星期二<span>16:30-20:00</span></li>
                            <li>星期三<span>16:30-20:00</span></li>
                            <li>星期四<span>16:30-20:00</span></li>
                            <li>星期五<span>16:30-20:00</span></li>
                            <li>星期六<span>09:00-21:00</span></li>
                            <li>星期日<span>09:00-21:00</span></li>
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
        {content:"仙林教学点，东方天郡",title:"明睿教育仙林教学点",imageOffset: {width:0,height:3},position:{lat:32.102643,lng:118.923381}}
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
  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap2(){
      createMap2();//创建地图
      setMapEvent2();//设置地图事件
      addMapControl2();//向地图添加控件
      addMapOverlay2();//向地图添加覆盖物
    }
    function createMap2(){
      map2 = new BMap.Map("map2");
      map2.centerAndZoom(new BMap.Point(118.79971,32.046751),18);
    }
    function setMapEvent2(){
      map2.enableScrollWheelZoom();
      map2.enableKeyboard();
      map2.enableDragging();
      map2.enableDoubleClickZoom()
    }
    function addClickHandler2(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay2(){
      var markers = [
        {content:"大行宫教学点，中山东路198号龙台国际大厦12楼",title:"明睿教育大行宫教学点",imageOffset: {width:0,height:3},position:{lat:32.046751,lng:118.79971}}
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
        addClickHandler2(marker,infoWindow);
        map2.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl2(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map2.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map2.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map2.addControl(overviewControl);
    }
    var map2;
      initMap2();
  </script>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->

        <!--footer starts-->
<?php include( "partials/footer.php" ); ?>
