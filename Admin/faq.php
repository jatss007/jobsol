<?php include "includes/header.php"; ?>
	  
      
	  
      <?php 
if(isset($_SESSION['role']))
{$role=$_SESSION['role'];
    if($role=='student')
    {
        ?>
        <?php include "includes/sidebar_student.php";?>
        <?php
    }
    else
    if($role=='company'){
            ?>
        <?php include "includes/sidebar_company.php";?>
        <?php
    }
    else{
        
            ?>
        <?php include "includes/sidebar.php";?>
        <?php
    
        
    }
}
    ?>          
            
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Faqs</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="asked">
	

			<div class="questions">
				<h5>1.What is Lorem Ipsum?</h5>
	        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	        </div>
			 <div class="questions">
				<h5>2.What is Lorem Ipsum dummy text ever since the 1500s?</h5>
			    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			 </div>	
			  <div class="questions">
				<h5>3.What is Duis laoreet, erat quis gravida porttitor odio felis ornare dui?</h5>
				<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam semper elit risus, nec suscipit tellus tincidunt quis. Fusce non auctor enim. Suspendisse sit amet erat mollis, suscipit nisl sed, condimentum turpis. Curabitur faucibus, nisl ut aliquam porta, massa tortor tristique dolor, eget porttitor velit ligula vel eros. Sed egestas aliquet tellus. Nulla ac luctus urna. Pellentesque feugiat eros quis nibh consectetur, eget dapibus magna egestas. Phasellus non efficitur metus.</p>
			 </div>	
			  <div class="questions">
				<h5>4.What is Quisque sollicitudin diam vel mauris volutpat viverra Proin ac imperdiet libero?</h5>
				<p>Proin dignissim mi sit amet tincidunt varius. Quisque molestie fermentum dignissim. Sed in urna eget tortor congue tempus. Vestibulum gravida, erat in eleifend ultricies, felis lorem dictum nulla, ut tincidunt neque libero et nibh. Nullam at eros eu ligula auctor interdum a eget lorem. Praesent molestie eros vitae felis efficitur, at finibus sem molestie. Ut sit amet nisi at nunc pulvinar dapibus. Sed non neque et tortor finibus mattis. Mauris sit amet consectetur eros. Sed et ex posuere, vulputate dolor vel, pulvinar felis. </p>
			 </div>	
			 
			  <div class="questions">
				<h5>5.What is Nam semper elit risus, nec suscipit tellus tincidunt quis?</h5>
			    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			 </div>	
			  <div class="questions">
				<h5>6.What is Quisque molestie fermentum dignissim?</h5>
				<p>Sed eget nunc ex. Donec erat est, dapibus ac massa in, laoreet sagittis eros. Aliquam eget arcu feugiat leo elementum tristique. Praesent facilisis aliquam lorem sed pharetra. Donec scelerisque ipsum vel tincidunt gravida. Aliquam erat volutpat. Etiam mattis rhoncus massa, quis semper purus ornare id. Quisque sit amet mattis ipsum, in porttitor massa. Nullam tincidunt mi vel enim volutpat, a elementum libero imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean tincidunt eros eu nisl consequat facilisis. Maecenas ac accumsan elit, sit amet gravida nulla.</p>
			 </div>	
			  <div class="questions">
				<h5>7.What is Vestibulum ante ipsum primis in faucibus orci luctus et?</h5>
			    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			 </div>				    

</div>
	<!--//faq-->
		<!---->
		
		
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
    </nav>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

