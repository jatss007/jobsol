<?php ob_start();?>
<?php session_start();?>
<?php include "includes/db.php"; ?>
<?php

if(isset($_COOKIE["Hiring"])){
    //add a query
    $id=$_COOKIE["Hiring"];

    global $connection;
    $query="sdfasdf";
    $query="SELECT * from user where user_id='{$id}' ";
    $select_user_query=mysqli_query($connection,$query);
      //sdfasdf
    while($row=mysqli_fetch_array($select_user_query)){
        $db_username=$row['user_name'];
        $db_userfirstname=$row['user_firstname'];
        $db_userlastname=$row['user_lastname'];
        $db_userrole=$row['user_role'];
        $db_userimage=$row['user_image'];
    }
    $_SESSION['id']=$id;
    $_SESSION['username']=$db_username;
    $_SESSION['firstname']=$db_userfirstname;
    $_SESSION['lastname']=$db_userlastname;
    $_SESSION['role']=$db_userrole;
    $_SESSION['image']=$db_userimage;

    if(strcmp($db_userrole,"admin")==0){
            header("Location: admin/user.php?dbuser={$db_userrole}");
    }
    else
    if(strcmp($db_userrole,"student")==0){
            header("Location: admin/student.php");
    }
    else{
            header("Location: admin/company.php?dbuser={$db_userrole}");
    }



}


?>


<?php include "includes/header.php" ?>

<!-- Navbar (sit on top) -->

<?php include "includes/navbar.php"?>;

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Compete with the best developers and challenge yourself.</span><br>
    <span class="w3-large">Compete with the best developers and challenge yourself.</span>


    <p><a href="register/signup.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div>
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Discover the Right Candidates Quickly</p>
      <p>Assess the technical skills of everyone—from early talent, experienced, and contingent—with pre-built or custom challenges to screen in the best candidates.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Improve Recruiting Efficiency</p>
      <p>Automate code reviews, view results instantly, and advance only quality candidates, so your technical hiring teams spend time with the right people.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">
Build Great Engineering Teams</p>
      <p>Evaluate developers with a scalable and standardized hiring process that evens out the playing field, eliminating bias and promoting diversity.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Grow Your Tech Talent Brand</p>
      <p>Give candidates a stellar interview experience through relevant code challenges and providing HackerRank’s best-in-class coding environment that developers worldwide already trust to build their skills.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<!--<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="/w3images/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>-->

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/himanshu.jpg" width="80" alt="himanshu" style="width:100%">
        <div class="w3-container">
          <h3>Himanshu Lal</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Computer Science and Engineering - Third Year.<br>Kamla Nehru Institute of Technology, Sultanpur.</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/animeshorignal.jpg" width="100" alt="Animesh" style="width:100%">
        <div class="w3-container">
          <h3>Animesh Garg</h3>
          <p class="w3-opacity">Back end developer</p>
          <p>Computer Science and Engineering - Third Year.<br>Kamla Nehru Institute of Technology, Sultanpur.</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
    <div class="w3-col l4 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/jatin2orignal.jpg"  width="100" width=100 alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Jatin Sinha</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Computer Science and Engineering - Third Year.<br>Kamla Nehru Institute of Technology, Sultanpur.</p>
          <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>-->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->

<?php
 global $connection;
$query1 = mysqli_query($connection,"select * from user where user_role = 'company'");
$number_of_company = mysqli_num_rows($query1);
$query2 = mysqli_query($connection,"select * from user where user_role = 'student'");
$number_of_student = mysqli_num_rows($query2);
$query3 = mysqli_query($connection,"select * from challange");
$number_of_challange = mysqli_num_rows($query3);
?>







<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-third">
    <span class="w3-xxlarge"><?php echo $number_of_company?>+</span>
    <br>Company
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge"><?php echo $number_of_student?>+</span>
    <br>Candidates
  </div>
  <div class="w3-third" >
    <span class="w3-xxlarge"><?php echo $number_of_challange?>+</span>
    <br>Challenges
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">COMPANIES CONNECTED</h3>
  <p class="w3-center w3-large">Help companies find innovative solutions for their businesses</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images/apple1.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Apple">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/hp1.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hewlett-Packard">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/ibm.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="International Business Machines">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/amazon.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Amazon">
    </div>
  </div>
    <br>
    <br>
  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="images/microsoft.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Microsoft">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/google.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Google">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/intel.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Intel">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/cisco.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Cisco">
    </div>
  </div>
</div>
<!-- <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images/apple1.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Apple">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/hp1.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hewlett-Packard">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/ibm.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="International Business Machines">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/amazon.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Amazon">
    </div>
  </div>
    <br>
    <br>
  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="images/microsoft.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Microsoft">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/google.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Google">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/intel.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Intel">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/cisco.png" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="Cisco">
    </div>
  </div>
</div>-->

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h2>Code & Get Hired.</h2>
      <p>Job Solution's mission is to match every developer to the right job. We’re driving a new paradigm shift by helping companies evaluate technical skills better and creating opportunities for millions of programmers worldwide.

</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Machine Learning and Data Analyist</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Development and Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Networking and Cloud Computing</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:83%">83%</div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> KNIT, Sultanpur, India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9876543210</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: jatinsnh4@gmail.com</p>
    <br>
    <form action="index.php" >
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit" name='submit'>
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <!--<img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">-->
  </div>
</div>

<!-- Footer -->
<?php
    include "includes/footer.php";
?>
