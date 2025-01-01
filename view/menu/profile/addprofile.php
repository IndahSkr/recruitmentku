<?php
session_start();
include "../../../model/url/alamat.php";
include "../../../assets/vendor/func/curl.php";

$link = 'https://wilayah.id/api/provinces.json';

$resultProvince = json_decode(curlget($link), TRUE);
$hasilProvince = $resultProvince['data'];

?>
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
                <h4 class="fw-semibold mb-8">User Profile</h4>
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
            <p><?php print_r($hasilProvince); ?></p>
            <form action="#" class="floating-labels">
              <div class="mb-3 form-group">
                <label class="form-label">Introduction <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <textarea name="textarea" id="textarea" rows="5" cols="30" class="form-control" required placeholder="Textarea text"></textarea>
                </div>
              </div>
              <hr>
              <div class="mb-3 form-group">
                <label class="form-label">SSN
                  <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Date of Birth
                  <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <input type="date" class="form-control" />
                </div>
              </div>
              <div class="mb-3 form-group">
                <label class="form-label">Birth Place
                  <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <input type="text" name="" class="form-control" />
                </div>
              </div>
              <div class="mb-3 form-group">
                <label class="form-label">Address <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <textarea name="textarea" id="textarea" rows="5" cols="30" class="form-control" required placeholder="Textarea text"></textarea>
                </div>
              </div>
              <div class="mb-3 form-group">
                <label class="form-label">Province <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <select name="select" id="select" required class="form-select form-control" onchange="provDist(value)">
                    <option value="0">Select Your Province</option>
                    <?php
                    foreach ($hasilProvince as $prov) {
                    ?>
                      <option value="<?php echo $prov['code'] ?>"><?php echo $prov['name'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="mb-3 form-group">
                <label class="form-label">District <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <select name="select" id="select" required class="form-select form-control">
                    <option value="">Select Your City</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="3">UK</option>
                    <option value="4">Canada</option>
                    <option value="5">Dubai</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 form-group">
                <label class="form-label">Village <span class="text-danger">*</span>
                </label>
                <div class="controls">
                  <select name="select" id="select" required class="form-select form-control">
                    <option value="">Select Your City</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="3">UK</option>
                    <option value="4">Canada</option>
                    <option value="5">Dubai</option>
                  </select>
                </div>
              </div>
              <!-- <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Introduction" rows="50" cols="30" name="" id=""></textarea> -->
              <!-- <input type="text" class="form-control" placeholder="Username" /> -->
              <!-- <label>
                  <i class="ti ti-user me-2 fs-4"></i>Introduction
                </label>
              </div> -->
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
  <script>
    function provDist(i) {
      $.ajax({
        method: 'GET',
        url: 'https://wilayah.id/api/regencies/12.json',
        dataType: "json",
        crossDomain: true,
        headers: {
          'Content-Type': 'text/xml; charset=utf-8',
          'Content-Type': 'application/json',
          'Access-Control-Allow-Origin': '*',
          'Access-Control-Allow-Methods': 'POST, GET',
          'Access-Control-Allow-Headers': 'Origin, X-Requested-With, Content-Type'
        },
        success: function(hasil) {
          // var hsl = hasil['data'];
          // console.log(JSON.stringify(hasil));
          console.log(hasil)
        }
      });
      // $.ajax("https://wilayah.id/api/regencies/" + i + ".json ", {
      //   success: function(d) {
      //     console.log(d)
      //   }
      // })
    }
  </script>
</body>

</html>