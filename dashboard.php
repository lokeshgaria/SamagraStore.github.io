<?php
include "includes/headers.inc.php"; 
?>
<section class="dashboard_bg">
  <div class="container">
    <!--breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!--end breadcrumb-->

    <div class="ttm-tabs ttm-tab-style-horizontal" data-effect="fadeIn">
      <div class="row">
        <!--left side-->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="left_menu">
            <ul class="tabs">
              <li class="tab active" id="dashbaordDiv"><a href="#"><img src="images\dashboard-icon.png"> Dashboard</a></li>
              <li class="tab" id="profile"><a href="#"><img src="images\profile-icon-left.png"> My Profile</a></li>
              <li class="tab"><a href="#"><img src="images/order-icon.png"> My Orders</a></li>
              <li class="tab"><a href="#"><img src="images/reports.png"> My Reports</a></li>
              <li class="tab"><a href="#"><img src="images\change-password.png"> Change Password</a></li>
              <li id="logout"><a href="logout.php"><img src="images\logout-icon.png"> Logout</a></li>
            </ul>
          </div>
        </div>
        <!--end left side-->

        <!--right side-->
     
      <!--end right side-->
    </div>
  </div>

  </div>
</section>

<?php
include "includes/footer.inc.php";
?>