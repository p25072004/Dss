
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>兩輪代步工具購買決策支援系統</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>兩輪代步工具</a>
            </li>
            <li>
                <a href="index.html" onclick=$("#menu-close").click();>回到首頁</a>
            </li>
            <li>
                <a href="#dss_sys" onclick=$("#menu-close").click();>開始決策!</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>服務項目</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>聯絡我們</a>
            </li>
        </ul>
    </nav>


  <body>
<div  align="center" >  
<?php include 'connect.php';?>
<h1>Hello!</h1>
<?php

	#接收使用者傳入權重,$all
$all=array("$_POST[user_1]","$_POST[user_2]","$_POST[user_3]","$_POST[user_4]","$_POST[user_5]");


	#$total:權重相加變數
$total=0;

	#$all_after:權重算完後變數
$all_after=array();

	//$bicycle:每台車的分項分數
$bicycle=array(0=>array(5,10,10,9,5),1=>array(3,0,6,3,3),2=>array(1,5,0,1,9),3=>array(3,0,3,2,6));

	#加起來
foreach($all as $value){
	$total=$total+$value;
	}

	#權重計算放入$all_after
foreach($all as $value){
	if($total==0)
		array_push($all_after,0);
	else
		array_push($all_after,$value/$total);
		echo $value/$total;
	}
	
	#$who放權重x分數,$temp占存用 
$who=array();
$temp=0;

	#權重x分數
if($total==0){
	for($i=0;$i<4;$i++){
	for($j=0;$j<5;$j++){
			$temp=$temp+$bicycle[$i][$j];	
	}
	array_push($who,$temp);
	$temp=0;
}
}
else{
for($i=0;$i<4;$i++){
	for($j=0;$j<5;$j++){
			$temp=$temp+$bicycle[$i][$j]*$all_after[$j];	
	}
	array_push($who,$temp);
	$temp=0;
}
}

	#$winner放前三名
$winner=array();
	
	arsort($who);
	$winner[0]= array_search(max($who),$who)+1;
	$who[$winner[0]-1]=-1;
	$winner[1]= array_search(max($who),$who)+1;
	$who[$winner[1]-1]=-1;
	$winner[2]= array_search(max($who),$who)+1;
	$who[$winner[2]-1]=-1;


//輸出資料庫
foreach($winner as $key=>$value){
$sql = "select * from electricity where id=\"$value\"  "; 

/* 執行SQL statement */
$result = @mysql_query($sql); 

/* while 迴圈撈取資料 */
echo "<table border='1'>";


while($row = @mysql_fetch_array($result)){
	//echo "<tr>"
	//echo "<img src=\"/pic/".$row['pic'].".jpg\" />";
echo "<tr>";
echo "<td rowspan=\"7\"><img src=\"/pic/".$row['pic'].".jpg\" width=\"320\" height=\"320\" /></td>";
echo "<td>第".($key+1)."名</td>";
echo "</tr>";

echo "<tr>";
echo "<td>車名:".$row['pic']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>重量:".$row['weight']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>煞車型式:".$row['break']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>極速:".$row['topspeed']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>價錢:".$row['cost']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>公司:".$row['company']."</td>";
echo "</tr>";
  //echo "<img src=\"/pic/vjr.jpg\" />";
  echo "</table>";
}


}

@mysql_close($conn);

?>

<br><a href="javascript:goBack()" class="btn btn-lg btn-dark">回到上一頁</a>
</div>
<!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x text-primary"></i>
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
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-motorcycle fa-stack-1x text-primary"></i>
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
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-map-marker fa-stack-1x text-primary"></i>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Wheel 2 GO!</strong>
                    </h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Wheel 2 GO! 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
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
                    });
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
	
	<script>
    function goBack() {
    window.history.back();
}

	</script>
</body>

</html>

