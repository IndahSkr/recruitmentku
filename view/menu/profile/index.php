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
                    <li class="breadcrumb-item" aria-current="page">User Profile</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="card overflow-hidden">
          <div class="card-body p-0">
            <img src="../../../assets/images/backgrounds/profilebg.jpg" alt="background" class="img-fluid">
            <div class="row align-items-center">
              <div class="col-lg-4 order-lg-1 order-2">
                <div class="d-flex align-items-center justify-content-around m-4">
                  <div class="text-center">
                    <i class="ti ti-file-description fs-6 d-block mb-2"></i>
                    <h4 class="mb-0 lh-1">938</h4>
                    <p class="mb-0 ">Posts</p>
                  </div>
                  <div class="text-center">
                    <i class="ti ti-user-circle fs-6 d-block mb-2"></i>
                    <h4 class="mb-0 lh-1">3,586</h4>
                    <p class="mb-0 ">Followers</p>
                  </div>
                  <div class="text-center">
                    <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                    <h4 class="mb-0 lh-1">2,659</h4>
                    <p class="mb-0 ">Following</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                <div class="mt-n5">
                  <div class="d-flex align-items-center justify-content-center mb-2">
                    <div class="d-flex align-items-center justify-content-center round-110">
                      <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                        <img src="../../../assets/images/profile/user-1.jpg" alt="modernize-img" class="img-fluid" width="100px">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="mb-0">Mathew Anderson</h5>
                    <p class="mb-0">Designer</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 order-last">
                <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-xxl-4 gap-3">
                  <li>
                    <a class="d-flex align-items-center justify-content-center btn btn-primary p-2 fs-4 rounded-circle" href="javascript:void(0)" width="30" height="30">
                      <i class="ti ti-brand-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="btn btn-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" href="javascript:void(0)">
                      <i class="ti ti-brand-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a class="btn btn-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" href="javascript:void(0)">
                      <i class="ti ti-brand-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <button class="btn btn-primary text-nowrap">Add To Story</button>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active hstack gap-2 rounded-0 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block">Profile</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                  <i class="ti ti-heart fs-5"></i>
                  <span class="d-none d-md-block">Followers</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false">
                  <i class="ti ti-user-circle fs-5"></i>
                  <span class="d-none d-md-block">Friends</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">
                  <i class="ti ti-photo-plus fs-5"></i>
                  <span class="d-none d-md-block">Gallery</span>
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="row">
              <div class="col-lg-4">
                <div class="card shadow-none border">
                  <div class="card-body">
                    <h4 class="card-title">Account Details</h4>
                    <form action="#">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" placeholder="Full Name">
                        <label for="#">
                          <i class="ti ti-user me-2 fs-4 text-info"></i>
                          <span class="border-start border-info ps-3">Full Name</span>
                        </label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" placeholder="uname">
                        <label for="#">
                          <i class="ti ti-users me-2 fs-4 text-info"></i>
                          <span class="border-start border-info ps-3">uname</span>
                        </label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" placeholder="E-Mail">
                        <label for="#">
                          <i class="ti ti-mail me-2 fs-4 text-info"></i>
                          <span class="border-start border-info ps-3">E-Mail</span>
                        </label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control border border-info" placeholder="Whatsapp">
                        <label for="#">
                          <i class="ti ti-brand-whatsapp me-2 fs-4 text-info"></i>
                          <span class="border-start border-info ps-3">Whatsapp</span>
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card shadow-none border">
                  <div class="card-body">
                    <h5 class="card-title mb-0">Introductions</h5>
                  </div>
                  <hr class="m-0">
                  <div class="card-body">
                    <form action="#">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <!-- <label class="form-label text-end col-md-3">First Name:</label> -->
                            <div class="col-md-12">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptatibus? Tenetur molestias quibusdam eligendi delectus dicta iusto natus similique, odit nesciunt dolorum quae illum quia sit voluptatem consequatur mollitia deserunt.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <hr class="m-0">
                  <div class="card-body">
                    <h5 class="card-title mb-0">User Details</h5>
                  </div>
                  <hr class="m-0">
                  <div class="card-body">
                    <form action="#">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">SSN</label>
                            <div class="col-md-9">
                              <p>332813xxxxxx</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Birth Place</label>
                            <div class="col-md-9">
                              <p>Buston</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Birth Date</label>
                            <div class="col-md-9">
                              <p>19102002</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Jenis Formasi</label>
                            <div class="col-md-9">
                              <p>Non Medis</p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </form>
                  </div>
                  <hr class="m-0">
                  <div class="card-body">
                    <h5 class="card-title mb-0">Address</h5>
                  </div>
                  <hr class="m-0">
                  <div class="card-body">
                    <form action="#">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Address</label>
                            <div class="col-md-9">
                              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, temporibus.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Province</label>
                            <div class="col-md-9">
                              <p>Lorem, ipsum dolor</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">District</label>
                            <div class="col-md-9">
                              <p>Lorem, ipsum dolor</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="form-label text-end col-md-3">Village</label>
                            <div class="col-md-9">
                              <p>Lorem, ipsum dolor</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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