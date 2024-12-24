<?php
session_start();
include "../../../model/url/alamat.php";
include "../../../assets/vendor/func/curl.php";
$upkey = $_SESSION['upkey'];
?>
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
      include "../../sidemenu/components/topSidebar.php";
      $dtAdmin = array(
        "key" => $upkey,
        "code" => "allUser"
      );

      $jsonAdmin = json_encode($dtAdmin);
      $sendAdmin = curlpost($url1, $jsonAdmin);
      $result = json_decode($sendAdmin, TRUE);
      // print_r($dtAdmin);
      ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <!-- <div class="card-body"> -->
            <div class="card-header mt-2">
              <div class="d-flex justify-content-end">
                <button class="btn me-1 mb-1 bg-primary-subtle text-primary px-4 fs-4" data-bs-toggle="modal" data-bs-target="#md-tmbUser">Tambah User</button>
              </div>
            </div>
            <div class="card-body p-2">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6>Nama Lengkap<?php print_r($sendAdmin) ?></h6>
                      </th>
                      <th>
                        <h6>Email</h6>
                      </th>
                      <th>
                        <h6>Wa</h6>
                      </th>
                      <th>
                        <h6>Status</h6>
                      </th>
                      <th>
                        <h6>Aksi</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Arif Hayati Indah Lestari</h6>
                            <span class="fw-normal">username</span>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- </div> -->
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