<?php 
include_once("includes/header.php"); 
include_once("includes/db_connect.php"); 
global $SERVER_PATH;
?> 
	<div id="banner">
    	<div class="left">
        	<div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
               <li><a href="#"><img src="./images/banner2.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/banner1.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/banner3.jpg" alt="" /></a></li>
            </ul>        
          </div>
          
        </div>
        </div>
    </div>
    <div class="clear"></div>
  <script type="text/javascript" src="./js/cont_slide.js"></script>
  <div id="content_sec">
     <div class="col1">
		<h4 class="heading colr">About Car Parking System</h4>
			<div class="news">
            <ul>
				<li>
                	<span class="newsdate" style="margin:4px 0 0 231px">Car Parking</span>
                	<h6 class="last">Manage Parkings</h6>
                    <a href="#" class="thumb"><img src="images/home1.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>Ability to define Special Event days (days where employees cannot request time-off, are warned or notified on the calendar)</p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li class="last">
                	<span class="newsdate" style="margin:4px 0 0 224px">Parking Slots</span>
                	<h6 class="last">Manage Parking Slots</h6>
                    <a href="#" class="thumb"><img src="images/home2.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	Add custom employee categories (i.e., departments, projects). Group your users by offices. Ability to display balance in hours or in days
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li>
                	<span class="newsdate" style="margin:4px 0 0 202px">User Management</span>
                	<h6 class="last">Manage Users</h6>
                    <a href="#" class="thumb"><img src="images/home3.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	3 levels of users (Administrators, Managers, Employees), each with their own different permissions. Single Sign-On, LDAP, Active Directory support thru OneLogin.comNew
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li class="last">
                	<span class="newsdate" style="margin:4px 0 0 205px">Parking Charges</span>
                	<h6 class="last">Manage Parking Charges</h6>
                    <a href="#" class="thumb"><img src="images/home4.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	Ability to choose different calendar year start dates for each user. Ability to upload your company logo to personalize the interface. Ability to set time-off, pending request and holiday reminders
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
			</ul>
			</div>
    </div>
	<div class="col2">
		<?php include_once("includes/sidebar.php"); ?>
		<div><img src="images/save_2.jpg" style="width: 250px"></div>
	</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<?php include_once("includes/footer.php"); ?> 
