
    <div class="row" style="background-color:#28475d; margin-left:0px; margin-right:0px;">
        <div id="navMenu">
              <ul>
<?php
	foreach ($pages as $k=>$v){
		if($page == $k){
		?>
		 <li class="menuActive arrow"><a href="#"><?php echo $v?></a></li>        
        <?php			
		}else{
		?>
		 <li><a href="index.php?page=<?php echo $k?>"><?php echo $v?></a></li>        
        <?php
		}

	}
?>              

              </ul> 
        
         </div> <!-- navMenu -->
     </div><!-- row -->
<!-- <div class="arrow-down"></div>-->