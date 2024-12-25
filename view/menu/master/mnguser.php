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
  <title>User Management</title>
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
      $resultAdmin = json_decode($sendAdmin, TRUE);
      $pesanAdmin = $resultAdmin['pesan'];

      ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">User Management</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#" class="text-muted text-decoration-none">Management</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">User Management</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card">
            <!-- <div class="card-body"> -->
            <div class="card-header mt-2">
              <div class="d-flex justify-content-end">
                <div>
                  <button class="btn me-1 mb-1 bg-primary-subtle text-primary px-4 fs-4" data-bs-toggle="modal" data-bs-target="#md-tmbUser">Tambah User</button>
                </div>
              </div>
            </div>
            <div class="card-body p-2">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6>Nama Lengkap</h6>
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
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    // print_r($resultAdmin);
                    foreach ($pesanAdmin as $sAdmin) {
                      // echo ($sAdmin['iduser']);
                    ?>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <h6 class="fs-4 fw-semibold mb-0"><?php echo $sAdmin['nmlkp'] ?></h6>
                              <span class="fw-normal"><?php echo $sAdmin['uname'] ?></span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal"><?php echo $sAdmin['email'] ?></p>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal"><?php echo $sAdmin['wa'] ?></p>
                        </td>
                        <td>
                          <?php
                          if ($sAdmin['isActive'] == 1) {
                          ?>
                            <span class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center">
                              <i class="ti ti-circle fs-3"></i>active
                            </span>
                          <?php
                          } else {
                          ?>
                            <span class="badge text-bg-danger text-dark fw-semibold fs-2 gap-1 d-inline-flex align-items-center">
                              <i class="ti ti-x fs-3"></i>inactive
                            </span>
                          <?php
                          }
                          ?>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="ti ti-dots-vertical fs-6"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-plus"></i>Add
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-edit"></i>Edit
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>

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