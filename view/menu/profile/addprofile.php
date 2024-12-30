<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include "../../sidemenu/components/head.php"
  ?>
  <title>Profile</title>
</head>
<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include "../../sidemenu/components/leftSidebar.php"
    ?>
    <!-- Sidebar Enb -->
    <!-- Main Wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <?php
      include "../../sidemenu/components/topSidebar.php";
      ?>
      <!-- Header End -->

      <!-- Content Start -->
      <div class="container-fluid">
        <!-- Header Content Start-->
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">User Profile<?php print_r($resultprofileid); ?></h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#" class="text-muted text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Add User Profile</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- Header Content End-->

        <!-- Body Content Start-->
         <div class="card">
          <div class="card-body">
            <h4 class="card-title">User Profile Edited</h4>
            <p class="card-subtitle mb-3">
              made with bootstrap elements
            </p>

            <form action="#">
              <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Introduction" rows="50" cols="30" name="" id=""></textarea>  
              <!-- <input type="text" class="form-control" placeholder="Username" /> -->
                <label>
                  <i class="ti ti-user me-2 fs-4"></i>Introduction
                </label>
              </div>
            </form>
          </div>
         </div>
        <!-- Body Content End -->
      </div>
      <!-- Content End -->

      <!-- Footer Start -->
      <?php
      include "../../sidemenu/modal/md-mnguser.php";
      include "../../sidemenu/components/footer.php";
      ?>
      <!-- Footer End -->
    </div>
  </div>
</body>
</html>