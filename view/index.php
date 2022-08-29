<?php
session_start();
if (!isset($_SESSION["sess_Name"])||!isset($_SESSION["sess_Phone"])) {
    header("location:signup/index.php");
}
else{
$name = $_SESSION['sess_Name'];
$phone = $_SESSION['sess_Phone'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TRUECALLER</title>
  <link rel="icon" href="truecaller.png">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
  </script>
  <script src="index.js"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <link rel="stylesheet" href="http://91.234.35.26/iwiki-admin/v1.0.0/admin/css/vendors/checkboxes.css">
  <script src="http://91.234.35.26/iwiki-admin/v1.0.0/admin/js/checkboxes.js"></script>
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</head>

<body>
  <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" id="same" href="index.php">
          <p>TrueCaller</p>
        </a>
        <a class="sidebar-brand brand-logo-mini" id="same" href="index.php">
          <p>T</p>
        </a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../assets/images/carousel/banner_12.jpg">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?= $name ?></h5>
                <span><?= "0" . $phone ?></span>
              </div>
            </div>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="profile_with_data_and_skills.php" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                </div>
            </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.php">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title"> Contact List </span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="chatting/chatting.php" target="_blank">
            <span class="menu-icon">
              <img src="message.png" width="25" height="25">
            </span>
            <span class="menu-title">Messages</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="callRecord/record.php">
            <span class="menu-icon">
              <img src="record.png" width="25" height="25">
            </span>
            <span class="menu-title">Call Recordings</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="blockList/block.php">
            <span class="menu-icon">
              <img src="block.png" width="27" height="27">
            </span>
            <span class="menu-title">Block List</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="keyboard/keyboard.php" target="_blank">
            <span class="menu-icon">
              <img src="key.png" width="17" height="23">
            </span>
            <span class="menu-title">Keyboard</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form method="POST" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input name="search" type="text" class="form-control" placeholder="Search numbers, names & more">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">

            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">4 new messages</p>
              </div>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Event today</p>
                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Launch Admin</p>
                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">See all notifications</p>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="profile_with_data_and_skills.php" data-toggle="dropdown">
                <div class="navbar-profile">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $name ?></p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="profile_with_data_and_skills.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <img src="profile.png">
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">
                      view profile
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item preview-item" href="logout.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>

            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="container bootstrap snippets bootdeys bootdey">
              <div class="row decor-default">
                <div class="col-lg-9 col-md-8 col-sm-12">
                  <div class="contacts-list">
                    <div class="unit head">
                      <div class="field name">
                        Name
                      </div>
                      <div class="field phone">
                        Phone
                      </div>
                      <div class="field email icons">
                        <div class="btn-group pull-right" role="group">
                          <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                              <a class="dropdown-item" href="blank-page.php">Add Contact</a>
                              <a class="dropdown-item" href="blank-page.php">Delete contact</a>
                              <a class="dropdown-item" href="blockList/block.php">Block list</a>
                            </div>
                            <div class="btn-group" role="group">
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      if (isset($_POST['search'])) {
                        $conn = mysqli_connect('localhost', 'root', '', 'truecaller');
                        $filtervalues = $_POST['search'];
                        $query = "SELECT * FROM `contactlist` WHERE CONCAT(callerName,callerPhone) LIKE '%$filtervalues%' ";

                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                          foreach ($query_run as $items) {
                      ?>
                            <div class="unit">
                              <div class="field name">
                                <div>
                                  <?= $items['callerName']; ?>
                                </div>
                              </div>
                              <div class="field phone">
                                <?= $items['callerPhone']; ?>
                              </div>
                            </div>
                        <?php
                          }
                        } else {
                          echo "No record found";
                        }
                      } else {
                        ?>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'truecaller');
                        $query = "SELECT * FROM contactlist";
                        // include 'conn.php';
                        $query_run = mysqli_query($conn, $query);
                        foreach ($query_run as $items) {
                        ?>
                          <div class="unit">
                            <div class="field name">
                              <div>
                                <?= $items['callerName']; ?>
                              </div>
                            </div>
                            <div class="field phone">
                              <?= $items['callerPhone']; ?>
                            </div>
                          </div>
                      <?php
                        }
                      }
                      ?>
                    </div>

                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
<?php
} ?>