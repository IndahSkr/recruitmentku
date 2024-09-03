<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "../../sidemenu/components/head.php"
  ?>
  <title>Document</title>
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include "../../sidemenu/components/leftSidebar.php"
    ?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php
      include "../../sidemenu/components/topSidebar.php"
      ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="card-header">
                <div class="d-flex justify-content-end">
                  <button class="btn me-1 mb-1 bg-primary-subtle text-primary px-4 fs-4" data-bs-toggle="modal" data-bs-target="#md-tmbUser">Tambah User</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "../../sidemenu/modal/md-mnguser.php";
  include "../../sidemenu/components/footer.php";
  ?>
</body>

</html>