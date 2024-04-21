<?php
require('../settings.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.1, shrink-to-fit=no">
  <title>Process - Edurelm</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/edulima-logo.png" />
  <script src="jquery-3.6.4.min.js"></script>
  <script src="bootstrap.min.js"></script>

  <style>
    .popup {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 14px;
      z-index: 9999;
      display: flex;
      align-items: center;
      background-color: rgba(0, 10, 5, 0.8);
      /* Background color with opacity */
      color: #fff;
    }

    .popup.success {
      background-color: #4CAF50;
      color: #fff;
    }

    .popup.error {
      background-color: #F44336;
      color: white;
    }

    .popup i {
      margin-right: 5px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="search.php" method="POST">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-account-search"></i>
              </div>
              <input type="text" name="Admission_Number" class="form-control bg-transparent border-0"
                placeholder="Enter Student's Admission Number">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item  dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false"> Print Format</a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
              <a class="dropdown-item" href="#Done">
                <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
          </li>

          <li class="nav-item nav-language dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-language-icon">
                <i class="flag-icon flag-icon-us" title="us" id="us"></i>
              </div>
              <div class="nav-language-text">
                <p class="mb-1 text-black">English</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <div class="nav-language-icon mr-2">
                  <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div>
              </a>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
              data-toggle="dropdown">
              <i class="mdi mdi-face"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0 bg-primary text-white py-4">User Profile</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-face"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">User Name</h6>
                  <p class="text-gray ellipsis mb-0">

                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-gmail"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">User Email</h6>
                  <p class="text-gray ellipsis mb-0">

                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-lock-outline"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">User Role</h6>
                  <p class="text-gray ellipsis mb-0">

                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center"><a href="edit_profile.php"><i class="mdi mdi-settings"> </i> Edit Profile
                </a></h6>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic30" aria-expanded="false"
              aria-controls="ui-basic30">
              <span class="icon-bg"><i class="mdi mdi-playlist-check menu-icon"></i></span>
              <span class="menu-title">Assessments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic30">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="assessments.php">By Student</a></li>
                <li class="nav-item"> <a class="nav-link" href="assessment.php">By Subject</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-city menu-icon"></i></span>
              <span class="menu-title">Sections</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_subject.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="subjects.php">List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false"
              aria-controls="ui-basic1">
              <span class="icon-bg"><i class="mdi mdi-view-dashboard menu-icon"></i></span>
              <span class="menu-title">Classes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_class.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="classes.php">List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false"
              aria-controls="ui-basic2">
              <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
              <span class="menu-title">Students</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_student.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="students.php">List</a></li>
                <li class="nav-item"> <a class="nav-link" href="filter.php">Filter</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false"
              aria-controls="ui-basic4">
              <span class="icon-bg"><i class="mdi mdi mdi-book-multiple menu-icon"></i></span>
              <span class="menu-title">Subjects</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_subject.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="subjects.php">List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false"
              aria-controls="ui-basic3">
              <span class="icon-bg"><i class="mdi mdi-account-key menu-icon"></i></span>
              <span class="menu-title">Staffs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_staff.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="staffs.php">Staffs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item documentation-link">
            <a class="nav-link" href="results.php">
              <span class="icon-bg">
                <i class="mdi mdi-file-document-box menu-icon"></i>
              </span>
              <span class="menu-title">Print Results</span>
            </a>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="user-details">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <div class="d-flex align-items-center">
                    <div class="sidebar-profile-img">
                      <span class="icon-bg"><i class="mdi mdi-account-check menu-icon"></i></span>
                    </div>
                    <div class="sidebar-profile-text">
                      <p class="mb-1"> -Admin</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="settings.php" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
              </a>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                <span class="menu-title">Documentation</span></a>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Update Result </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="assessment.php">Assessments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Process</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php
                  if (isset($_REQUEST['class'])) {
                    $subject = stripslashes($_REQUEST['subject']);
                    $class = stripslashes($_REQUEST['class']);
                    ?>
                    <h4 class="card-title">
                      <?php echo $subject; ?> -
                      <?php echo $class; ?>
                    </h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Students Name</th>
                          <th>CA</th>
                          <th>Exam Score</th>
                          <th>Update</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $query = "SELECT * FROM `students` WHERE `students`.`class` = '$class'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          $i = $row['RegNo'];
                          $queryv = "SELECT * FROM `$class` WHERE `RegNo` = '$i' AND `session` = '$curr_session' AND `term` = '$curr_term'";
                          $resultv = mysqli_query($con, $queryv);
                          while ($rowv = mysqli_fetch_assoc($resultv)) {
                            $Test = $subject . '_test';
                            $Exam = $subject . '_exam';
                            $Total = $subject . '_total';

                            ?>
                            <tr>
                              <td>
                                <?php echo $row['fullname']; ?>
                              </td>


                              <form action="" method="POST" class="add_marks_form">
                                <td>
                                  <select name="_Test" class="form-control" id="class" required>
                                    <option value="<?php echo $rowv[$Test]; ?>" selected> Current Mark: <?php echo $rowv[$Test]; ?></option>
                                    <?php
                                    for ($i = 1; $i <= 40; $i++) {
                                      echo "<option value=\"$i\">$i</option>\n";
                                    }
                                    ?>
                                  </select>
                                </td>
                                <td>
                                  <select name="_Exam" class="form-control" id="class" required>
                                    <option value="<?php echo $rowv[$Exam]; ?>" selected> Current Mark: <?php echo $rowv[$Exam]; ?></option>
                                    <?php
                                    for ($i = 1; $i <= 60; $i++) {
                                      echo "<option value=\"$i\">$i</option>\n";
                                    }
                                    ?>
                                  </select>
                                </td>

                                  <input type="hidden" name="subject" value="<?php echo $subject; ?>">
                                  <input type="hidden" name="class" value="<?php echo $class ?>">
                                  <input type="hidden" name="RegNo" value="<?php echo $row['RegNo']; ?>">
                                  <input type="hidden" name="fullname" value="<?php echo $row['fullname']; ?>">
                                  <input type="hidden" name="Test" value="<?php echo $rowv[$Test]; ?>">
                                  <input type="hidden" name="Exam" value="<?php echo $rowv[$Exam];
                                  } ?>">

                                <td>
                                  <button type="submit" class="btn btn-inverse-success btn-icon">
                                    <i class="mdi mdi-cloud-upload"></i>
                                  </button>
                                </td>
                              </form>
                        </tr>
                      <?php } ?>
                      </tbody>



                    </table>
                  <?php } else { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Nothing Selected! Redirecting...</strong>
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <script>
                      window.location.href = "assessment.php";
                    </script>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="footer-inner-wraper">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">SITD</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Copyright © Edurelm Student
                Result Management System
                2022</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->


  <script>
    //Function to display a popup message
    function displayPopup(message, success) {
      var popup = document.createElement('div');
      popup.className = 'popup ' + (success ? 'success' : 'error');

      var iconClass = success ? 'fa fa-check-circle' : 'fa fa-times-circle';
      var icon = document.createElement('i');
      icon.className = iconClass;
      popup.appendChild(icon);

      var text = document.createElement('span');
      text.textContent = message;
      popup.appendChild(text);

      document.body.appendChild(popup);

      setTimeout(function () {
        popup.remove();
      }, 5000);
    }




    document.querySelectorAll(".add_marks_form").forEach(function (form) {
      form.addEventListener("submit", function (event) {
        console.log('form submitted');
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'add_marks.php',
          data: $(this).serialize(),
          dataType: 'json',
          success: function (response) {
            if (response.success) {
              displayPopup(response.message, true);
            } else {
              displayPopup(response.message, false);
            }
          },
          error: function (error, xhr) {
            displayPopup('Error occurred during AJAX request', false);
            console.error('Error:', error, xhr);
          },
        });
      });
    });



  </script>


</body>

</html>