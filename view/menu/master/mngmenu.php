<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "../../sidemenu/components/head.php"
  ?>
  <title>Menu Management</title>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include "../../sidemenu/components/leftSidebar.php"
    ?>
    <!-- Sidebar End -->

    <!-- Main Wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <?php
      include "../../sidemenu/components/topSidebar.php";
      ?>
      <!-- Header End -->

      <!-- Content Start -->
      <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Menu Management</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#" class="text-muted text-decoration-none">Management</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Menu Management</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card">
            <div class="card-header mt-2">
              <div class="d-flex justify-content-end">

                <!-- <div class="me-1 mb-1 text-primary">
                  <h4>Menu Management</h4>
                </div> -->
                <div>
                  <button class="btn me-1 mb-1 bg-primary-subtle text-primary px-4 fs-4" data-bs-toggle="modal" data-bs-target="#md-menu">#</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Content End -->
    </div>
  </div>

  <!-- Footer Start -->
  <?php
  include "../../sidemenu/modal/md-mnguser.php";
  include "../../sidemenu/components/footer.php";
  ?>
  <!-- Footer End -->
</body>

</html>