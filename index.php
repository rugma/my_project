change from rahul
<?php include("config.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--------------title ----------------------->
<title>Welcome to Movin Builders & property developers pvt. ltd</title>
<!--------------Fav Icon ----------------------->
<link rel="shortcut icon" type="image/png" href="images/favicon.ico" />
<!--------------Google fonts ----------------------->
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<!------------* css *------------------>
<link href="css/main_style.css" rel="stylesheet" type="text/css" />

	<!------------* js*------------------>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="js/mobilyslider.js" type="text/javascript"></script>
    <script src="js/custome.js" type="text/javascript"></script>
    <!--<script>
            !window.jQuery && document.write('<script src="tell/scripts/jquery-1.4.3.min.js"><\/script>');
        </script>-->
    <script type="text/javascript" src="tell/fancybox/jquery.easing-1.3.pack.js"></script>
    <script type="text/javascript" src="tell/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script>
	 $(document).ready(function(){
							   //alert(scrolls("x"));
	$(".nav li:nth-child(1)").addClass('current');
	})
    </script>
    
	<link rel="stylesheet" type="text/css" href="tell/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link media="screen" rel="stylesheet" href="css/colorbox.css" />
    	
    <script src="js/jquery.colorbox.js"></script>
    
    
    <script type="text/javascript">
$(function()
{
    $(window).bind('load', 
        function(e) 
        {
            $.colorbox({opacity:0.7, href:"intro.html"}); 
        });
});
</script>
    
    
    
</head>
<body style="background-color:#FFF;">

 



<?php include("header.php"); ?>
<!----- header ---->
<div class="clear"></div>
<div id="container_bnr">
  <div id="banner_main">
    <div class="banner">
      <div class="bnr_slider slider">
        <div class="sliderContent">
          <div class="item"> <img src="images/bnr_1.jpg" alt="Movin Builders & property developers Pvt.Ltd"/> </div>
          <div class="item"> <img src="images/bnr_2.jpg" alt="Movin Builders & property developers Pvt.Ltd"/> </div>
          <div class="item"> <img src="images/bnr_4.jpg" alt="Movin Builders & property developers Pvt.Ltd"/> </div>
          <div class="item"> <img src="images/bnr_3.jpg" alt="Movin Builders & property developers Pvt.Ltd"/> </div>
          <div class="item"> <img src="images/bnr_4.jpg" alt="Movin Builders & property developers Pvt.Ltd"/> </div>
        </div>
      </div>
    </div>
    <div class="bnr_shadow"></div>
  </div>
  <!-----id banner_main Div---->
</div>
<!-----container_bnr---->
<div class="clear"></div>
<div id="wrapper">
  <div class="content_area">
    <div class="rightdiv">
      <div class="ri_menudiv">
       <a id="various4" href="tell/tell.html">
        <div class="ri_but ri_tell"></div>
        </a> <a target="_blank" href="customer_login/index.php">
        <div class="ri_but ri_clogin"></div>
        </a> <a href="news.php">
        <div class="ri_but ri_news"></div>
        </a> </div>
      <div class="ri_newsdiv">
        <ul id="ticker">
         <?php
		$news=mysql_query("select * from movin_news where is_status=1 order by id desc");
		while($news1=mysql_fetch_array($news)) {
			$t=explode("-",$news1['time']);
			$t1=$t[1];
			$t2=$t[2];
			$t3=$t[0];
			$tm=$t2."/".$t1."/".$t3;
			?>
          <li> <span> <?php echo $tm;?> </span> <a href="news.php?id=<?php echo $news1['id'];?>"> <?php echo ucfirst($news1['title']);?> </a> <br />
            <p style="padding-bottom:6px; "><?php echo ucfirst($news1['brief']);?> </p>
             
          </li>
                 

           <?php
		}?>
        </ul>
        <div class="more"><a href="news.php?id=<?php echo $news1['id'];?>" style="text-transform:lowercase !important;">more...</a></div>
<!--        <div class="more"><a href="#">more...</a></div>
-->      </div>
      <div class="ri_servicediv"> <a href="services.php">
        <div class="servi_but" style="margin-right:12px;"> Services </div>
        </a> <a href="gallery2.php">
        <div  class="servi_but" style="float:right;"> Gallery </div>
        </a> </div>
    </div>
    <div class="leftdiv">
      <div class="home_title"> <span>
        <h1>Tracing Dreams...</h1>
        </span> </div>
      <div class="wel_div">
      <div class="wel_text">
       <span><img src="images/welcome_img.jpg" alt="Movin Builders"/></span>
     
         <strong>
        We give life to dream dwellings, exceptionally functional, economically sustainable, and environmentally sensitive.  The saying goes "There is no place like home''.</strong><br />  We define what a home could be. 
        
          
          At Movin Builders, we create natural living spaces, without compromising luxury and elegance.  Beyond the conventional housing concept perception, we develop homes that are a reflection of the owner, catering to the diversity of every demographic. <br /><br />
Our goal is to provide the backdrop for generations, combining modernity and comfort suited for all.

<strong>With Movin builders, experience a whole new level of modern day living.</strong>
	
    <span class="more"><a href="profile.php">more...</a></span>
    
      </div>     
        
      </div>
      <div class="home_title2">
        <h1>Project Details</h1>
      </div>
      <div class="pro_view">
        <div class="pro_detail right"> <span> <img src="images/project_1.jpg" alt="Movin Builders Address Elevation"/> </span>
          <div class="pro_title"> Elevation </div>
          <!--<span> <strong>Lorem Lipsum dummy text</strong><br />
          dummy text </span>--> </div>
        <div class="pro_detail right left"> <span> <img src="images/project_2.jpg" alt="Movin Builders Address aerial View"/> </span>
          <div class="pro_title"> aerial View </div>
          <!--<span> <strong>Lorem Lipsum dummy text</strong><br />
          dummy text </span>--> </div>
        <div class="pro_detail  left"> <span> <img src="images/project_3.jpg" alt="Movin Builders Address facilities "/> </span>
          <div class="pro_title"> facilities </div>
          <!--<span> <strong>Lorem Lipsum dummy text</strong><br />
          dummy text </span>--> </div>
      </div>
    </div>
  </div>
</div>
<div class="clear line_bevel"></div>
<div id="footer_main">
  <?php include("footer.php"); ?>
</div>
<!-- footer_main -->
</body>
</html>
