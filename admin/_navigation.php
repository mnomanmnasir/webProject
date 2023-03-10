<?php
include("./_session.php");
include("./conn.php");
?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
      onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="products.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-diamond fa-fw"></i>Product Management
    </a>

    <a href="users.php" class="w3-bar-item w3-button w3-padding w3-blue">
      <i class="fa fa-users fa-fw"></i> Users Management
    </a>

    <a href="inquiries.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-history fa-fw"></i>Inquiry Management
    </a>

    <a href="logout.php" class="w3-bar-item w3-button w3-padding">
      <i class="fa fa-cog fa-fw"></i>Logout
    </a><br><br>
  </div>
</nav>