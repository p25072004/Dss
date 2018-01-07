<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<style>
html, body {
	height: 100%;
	margin: 0;
	padding: 0;
}

#map {
	height: 100%;
}
</style>
<title>兩輪代步車種</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/stylish-portfolio.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
<link
	href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include 'connect.php';?>
    <!-- Navigation -->
	<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i
		class="fa fa-bars"></i></a>
	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<a id="menu-close" href="#"
				class="btn btn-light btn-lg pull-right toggle"><i
				class="fa fa-times"></i></a>
			<li class="sidebar-brand"><a href="#top" onclick=$("#menu-close").click();>兩輪代步車種</a>
			</li>
			<li><a href="index.html" onclick=$("#menu-close").click();>回到首頁</a></li>
			<li><a href="#Category_list" onclick=$("#menu-close").click();>一般機車</a>
			</li>
			<li><a href="#Category_list2" onclick=$("#menu-close").click();>電動車</a>
			</li>
			<li><a href="#services" onclick=$("#menu-close").click();>服務項目</a></li>
			<li><a href="#contact" onclick=$("#menu-close").click();>聯絡我們</a></li>
		</ul>
	</nav>

	<!-- Header -->
	<header id="top" class="header">
		<div class="text-vertical-center">
			<h1>兩輪代步車種</h1>
			<h3>點選下方按鈕，選擇欲查看的車種</h3>
			<br> <a href="#Category_list" class="btn btn-dark btn-lg">一般機車</a> <a
				href="#Category_list2" class="btn btn-dark btn-lg">電動車</a>
		</div>
	</header>

	<!-- Category_list -->
	<section id="Category_list" class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div align="center">
						<h3>一般機車</h3>
<?php

$sql = "select * from motorcycles";
/* 執行SQL statement */
$result = @mysql_query($sql);

/* while 迴圈撈取資料 */

// $row = mysql_fetch_array($result) or print(mysql_error()) ;

echo "<table border='0' class=\"table\">";
while ($row = @mysql_fetch_array($result)) {
    // echo "<tr>"
    // echo "<img src=\"/pic/".$row['pic'].".jpg\" />";
    echo "<tr>";
    echo "<td rowspan=\"18\" class=\"col-md-5\"><img src=\"/pic/" . $row['pic'] . ".jpg\" width=\"320\" height=\"320\" /></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>車名:" . $row['pic'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>排氣量:" . $row['cc'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>重量:" . $row['weight'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>輪胎大小:" . $row['tier'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>煞車型式:" . $row['break'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>馬力:" . $row['hp'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>扭力:" . $row['torque'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>動力型式:" . $row['power'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>引擎:" . $row['engine'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>油耗:" . $row['oilwaste'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>車型:" . $row['style'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>變速型式:" . $row['turnspeed'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>長寬高:" . $row['longwidthheight'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>牌照稅:" . $row['boardcost'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>燃料稅:" . $row['burncost'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>銷售價:" . $row['cost'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>公司:" . $row['company'] . "</td>";
    echo "</tr>";
    // echo "<img src=\"/pic/vjr.jpg\" />";
}
echo "</table>";
?>
</div>
				</div>
			</div>
			<!-- /.row -->
			<!--/.DDS_SYS-->

			<!-- Category_list -->
			<section id="Category_list2" class="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div align="center">
								<h3>電動車</h3>
<?php
@mysql_query("SET NAMES 'UTF8'");
@mysql_select_db("electricity");
$sql = "select * from electricity   ";
/* 執行SQL statement */
$result = @mysql_query($sql);

/* while 迴圈撈取資料 */


echo "<table border='0' class=\"table\">";
while ($row = @mysql_fetch_array($result)) {
    // echo "<tr>"
    // echo "<img src=\"/pic/".$row['pic'].".jpg\" />";
    echo "<tr>";
    echo "<td rowspan=\"6\" class=\"col-md-5\"><img src=\"./pic/" . $row['pic'] . ".jpg\" width=\"320\" height=\"320\" /></td>";
    echo "<td>車名:" . $row['pic'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>重量:" . $row['weight'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>煞車型式:" . $row['break'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>極速:" . $row['topspeed'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>銷售價:" . $row['cost'] . "</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>公司:" . $row['company'] . "</td>";
    echo "</tr>";
    // echo "<img src=\"/pic/vjr.jpg\" />";
}
echo "</table>";
?>
</div>
						</div>
					</div>
					<!-- /.row -->
					<!--/.DDS_SYS-->
					<div>
						<script>
var map;
var infowindow;

function initMap() {
  var pyrmont = {lat: 24.9734838, lng: 121.2420941};

  map = new google.maps.Map(document.getElementById('map'), {
    center: pyrmont,
    zoom: 16
  });

  infowindow = new google.maps.InfoWindow();

  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch({
    location: pyrmont,
    radius: 5000,
    types: ['bicycle_store']
  }, callback);
}

function callback(results, status) {
  if (status === google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}

    </script>
						</head>
						<body>
							<div id="map"></div>
							<script
								src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgur6-U3sh-gBTPuY2YOCWDEeCLh-1jak&signed_in=true&libraries=places&callback=initMap"
								async defer></script>
						</body>
					</div>

				</div>
				<!-- /.container -->
			</section>

			<!-- Services -->
			<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
			<section id="services" class="services bg-primary">
				<div class="container">
					<div class="row text-center">
						<div class="col-lg-10 col-lg-offset-1">
							<h2>我們提供的服務</h2>
							<hr class="small">
							<div class="row">
								<div class="col-md-4 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i
											class="fa fa-circle fa-stack-2x"></i> <i
											class="fa fa-search fa-stack-1x text-primary"></i>
										</span>
										<h4>
											<strong>兩輪代步車種</strong>
										</h4>
										<p>我們分析的車種</p>
										<a href="category_list.php" class="btn btn-light">瞭解更多</a>
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i
											class="fa fa-circle fa-stack-2x"></i> <i
											class="fa fa-motorcycle fa-stack-1x text-primary"></i>
										</span>
										<h4>
											<strong>決策支援系統</strong>
										</h4>
										<p>選擇最適合你的兩輪代步工具！</p>
										<a href="dss_sys.html" class="btn btn-light">瞭解更多</a>
									</div>
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="service-item">
										<span class="fa-stack fa-4x"> <i
											class="fa fa-circle fa-stack-2x"></i> <i
											class="fa fa-map-marker fa-stack-1x text-primary"></i>
										</span>
										<h4>
											<strong>附近車行</strong>
										</h4>
										<p>尋找附近車行！</p>
										<a href="location.html" class="btn btn-light">瞭解更多</a>
									</div>
								</div>
							</div>
							<!-- /.row (nested) -->
						</div>
						<!-- /.col-lg-10 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<!-- Footer -->
			<footer>
				<div class="container" id="contact">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 text-center">
							<h4>
								<strong>Wheel 2 GO!</strong>
							</h4>
							<p>
								中山大學資訊管理學所 <br>雲端運算導論第四組
							</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-phone fa-fw"></i></li>
								<li><i class="fa fa-envelope-o fa-fw"></i> <a
									href="mailto:name@example.com">name@example.com</a></li>
							</ul>
							<br>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a></li>
							</ul>
							<hr class="small">
							<p class="text-muted">Copyright &copy; Wheel 2 GO! 2016</p>
						</div>
					</div>
				</div>
				<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i
					class="fa fa-chevron-up fa-fw fa-1x"></i></a>
			</footer>

			<!-- jQuery -->
			<script src="js/jquery.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>

			<!-- Custom Theme JavaScript -->
			<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    })
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
