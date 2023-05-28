<?php
$pages = array(
		'welcome'=>"Home",
		'teaching'=>"Teaching",
		'research'=>"Research",
		'books'=>"Books",
		'apps'=>"Apps",
		'students'=>"Students",
		'service'=>"Service"
		);
		
//print_r($active);
//print "<hr>";

//print_r($active);
$page=$_GET['page'];
if(!$pages[$page]){
	$page ="welcome";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Qusay H. Mahmoud | <?php echo $pages[$page]?></title>
<?php include ("inc_header.html")?> 
  </head>
<body style="background-image:url(images/background.jpg)">
<?php include ("inc_body01.html")?> 
   

<div class="container" style="background-color:#FFFFFF">
<?php include ("inc_body02_logo.html")?> 


<?php include "inc_top_nav.php";?>  
<?php 
if($page == 'welcome'){
	include "inc_slide_show.html";
}
?>  



    <div class="row">
            <div class="col-11" style="margin:10px; margin-right:20px;">
           
            
 <?php include ("page_".$page.".php");?>             
            </div>    
    </div>
    <br/>
              
<?php include "inc_footer.html";?> 
</body>
</html>
