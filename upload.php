<?php require 'settings.php' ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Upload - Rinda AMS</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="overpass-font.css" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <link rel="stylesheet" href="css/select2.css">
  <link rel="stylesheet" href="css/dropzone.css">
  <link rel="stylesheet" href="css/uppy.min.css">
  <link rel="stylesheet" href="css/jquery.steps.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/quill.snow.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
  <style>
    .card {
      border-radius: 8px;
    }
  </style>
</head>

<body class="vertical  light  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
          placeholder="Type something..." aria-label="Search">
      </form>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
          </a>
        </li>
        <li class="nav-item nav-notif">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <div class="text-right" style="margin-right: 10%;">
              <p style="padding: 0%; margin: 0%;">sirabdul@rinda.ai</p>
              <strong>Super Admin</strong>
            </div>
            <hr width="80%">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activities</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
        </div>

        <p class="text-muted nav-heading mt-4 mb-1">
          <span>Administrative Dashboard</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <!-- Account -->
          <li class="nav-item dropdown">
            <a href="#account-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-dollar-sign fe-16"></i>
              <span class="ml-3 item-text">Account</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="account-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="../fees-type.php"><span class="ml-1 item-text">Fees Type</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Invoices</span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link pl-3" href="payment-history.php"><span class="ml-1 item-text">Payment
                    History</span></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link pl-3" href="../expense.php"><span class="ml-1 item-text">Expense</span></a>
              </li>
            </ul>
          </li>
          <!-- Attendance -->
          <!-- <li class="nav-item dropdown">
            <a href="#attendance-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-check-circle fe-16"></i>
              <span class="ml-3 item-text">Attendance</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="attendance-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="students-attendance.php"><span class="ml-1 item-text">Students
                    Attendance</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="teachers-attendance.php"><span class="ml-1 item-text">Teacher
                    Attendance</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="staffs-attendance.php"><span class="ml-1 item-text">Staff
                    Attendance</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Asset Management -->
          <li class="nav-item dropdown">
            <a href="#asset-management-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Asset Management</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="asset-management-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="vendors.php"><span class="ml-1 item-text">Vendor</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="asset-category.php"><span class="ml-1 item-text">Asset
                    Category</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="assets.php"><span class="ml-1 item-text">Asset</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="assign-assets.php"><span class="ml-1 item-text">Asset
                    Assignment</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="purchase.html"><span class="ml-1 item-text">Purchase</span></a>
              </li>
            </ul>
          </li>
          <!-- Curriculum -->
          <!-- <li class="nav-item dropdown">
            <a href="#curriculum-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-book fe-16"></i>
              <span class="ml-3 item-text">Curriculum</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="curriculum-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="curriculum-type.html"><span class="ml-1 item-text">Curriculum</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="lesson-assistant.html"><span class="ml-1 item-text">Lesson
                    Assistant</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Hostel -->
          <li class="nav-item dropdown">
            <a href="#hostel-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Hostel</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="hostel-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="hostel.html"><span class="ml-1 item-text">Hostel</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="room-types.html"><span class="ml-1 item-text">Room Types</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="hostel-membership.html"><span
                    class="ml-1 item-text">Membership</span></a>
              </li>
            </ul>
          </li>
          <!-- Report -->
          <!-- <li class="nav-item dropdown">
            <a href="#report-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-bar-chart-2 fe-16"></i>
              <span class="ml-3 item-text">Report</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="report-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="exams.html"><span class="ml-1 item-text">Student Attendance
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-audio.html"><span class="ml-1 item-text">Homework Evaluation
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Student Transport
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Student Login
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Class Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Class Routine</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">User Log</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Student
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Online Exam
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Staff Attendance
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Payroll
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Fees Due
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Fine Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Balance
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Expense
                    Report</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Transaction
                    Report</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Mail/SMS -->
          <!-- <li class="nav-item dropdown">
            <a href="#mail&sms-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Mail/SMS</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="mail&sms-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-video.html"><span class="ml-1 item-text">New Mail</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-audio.html"><span class="ml-1 item-text">New Bulk Mail</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="study-content.html"><span class="ml-1 item-text">Mail/SMS List</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Human Resource -->
          <!-- <li class="nav-item dropdown">
            <a href="#human-resource-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-user-check fe-16"></i>
              <span class="ml-3 item-text">Human Resource</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="human-resource-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="designation.html"><span class="ml-1 item-text">Designation</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="department.html"><span class="ml-1 item-text">Department</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="add-staff.html"><span class="ml-1 item-text">Add Staff</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="staff-directory.html"><span class="ml-1 item-text">Staff
                    Directory</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="Payroll.html"><span class="ml-1 item-text">Payroll</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Leave Application
          <li class="nav-item dropdown">
            <a href="#leave-application-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-activity fe-16"></i>
              <span class="ml-3 item-text">Leave</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="leave-application-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="leave-application.html"><span class="ml-1 item-text">Leave
                    Application</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="leave-category.html"><span class="ml-1 item-text">Leave Category</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="approved-leave.html"><span class="ml-1 item-text">Approved
                    Leave</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="pending-leave.html"><span class="ml-1 item-text">Pending Leave</span></a>
              </li>
            </ul>
          </li> -->
          <!-- Study materials -->
          <li class="nav-item active dropdown">
            <a href="#study-materials-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-archive fe-16"></i>
              <span class="ml-3 item-text">Study Materials</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="study-materials-elements">
              <li class="nav-item">
                <a class="nav-link pl-3 text-primary" href="upload.php"><span class="ml-1 item-text">Upload
                    Content</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="videos.php"><span class="ml-1 item-text">Videos</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="audio.php"><span class="ml-1 item-text">Audio</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="documents.php"><span class="ml-1 item-text">Documents</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="file-manager.php"><span class="ml-1 item-text">File Manager</span></a>
              </li>
            </ul>
          </li>
          <!-- Transportation -->
          <li class="nav-item dropdown">
            <a href="#transportation-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-truck fe-16"></i>
              <span class="ml-3 item-text">Transportation</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="transportation-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="drivers.html"><span class="ml-1 item-text">Drivers</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="route.html"><span class="ml-1 item-text">Route</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="vehicles.html"><span class="ml-1 item-text">Vehicle</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="transport-membership.html"><span
                    class="ml-1 item-text">Membership</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="page-title">File Uploads</h2>
            <p class="lead text-muted"></p>

            <div class="col-md-12">
              <div class="card shadow mb-4">

                <div class="card-body">
                  <div>


                  </div>
                  <form action="upload-item.php" method="POST" class=" needs-validation" id="tinydash-dropzone"
                    novalidate>

                    <div class="input-space">



                      <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Title</label>
                        <input type="text" id="address-wpalaceholder" class="form-control"
                          placeholder="Name your upload" required name='name'>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Bad title</div>
                      </div>


                      <!-- Class & Subject -->
                      <div class="form-row">

                        <div class="col-md-6 mb-3">
                          <label for="validationSelect2">Class</label>
                          <select class="form-control select2" id="validationSelect2" required name='class'>
                            <option value="">Select Class</option>
                            <?php
                            $query = "SELECT * FROM classes ORDER BY `classes`.`class` ASC";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute();
                            $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (count($classes) === 0) {
                              echo '<p class="text-center">No class added Yet!</p>';
                            } else {
                              foreach ($classes as $class): ?>
                                <option value="<?= $class['class']; ?>"> <?= $class['class'] ?></option>
                              <?php endforeach;
                            } ?>
                          </select>
                          <div class="invalid-feedback"> Please select a class. </div>
                        </div>



                        <div class="col-md-6 mb-3">
                          <label for="validationSelect2">Subject</label>
                          <select class="form-control select2" id="validationSelect29" required name='subject'>
                            <option value="">Select state</option>
                            <?php
                            $query = "SELECT * FROM subjects ORDER BY `subjects`.`class` ASC";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute();
                            $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (count($subjects) === 0) {
                              echo '<p class="text-center">No class added Yet!</p>';
                            } else {
                              foreach ($subjects as $subject): ?>
                                <option value="<?= $subject['subject']; ?>"> <?= $subject['subject'] ?></option>
                              <?php endforeach;
                            } ?>
                          </select>
                          <div class="invalid-feedback"> Please select a subject. </div>
                        </div>
                      </div>
                      <!-- /Class & Subject -->


                      <!-- Type & Folder-->
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationSelect27">Type</label>
                          <select class="form-control select2" id="validationSelect27" required name='folder'>
                            <option value="">Select Type</option>
                            <?php
                            $upload_status = 'allowed';
                            $query = "SELECT * FROM upload_type WHERE `status` = :status ORDER BY `upload_type`.`type` ASC";
                            $stmt = $pdo->prepare($query);
                            $stmt->bindParam(':status', $upload_status, PDO::PARAM_STR);
                            $stmt->execute();
                            $upload_status = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (count($upload_status) === 0) {
                              echo '<p class="text-center">No class added Yet!</p>';
                            } else {
                              foreach ($upload_status as $type): ?>
                                <option value="<?= $type['type']; ?>"> <?= $type['type'] ?></option>
                              <?php endforeach;
                            } ?>
                          </select>
                          <div class="invalid-feedback"> Please select a class. </div>
                        </div>



                        <div class="col-md-6 mb-3">
                          <label for="validationSelect28">Folder</label>


                          <select class="form-control select2" id="validationSelect28" required name='folder'>
                            <option value="">Select Folder</option>
                            <?php
                            $public = 'public';
                            $permission = 2;
                            $user = 'User A';

                            $query = "SELECT * FROM folders WHERE `status` = :public AND `permission` = :permission OR `added_by` = :user ORDER BY `name` ASC";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute(['public' => $public, 'permission' => $permission, 'user' => $user]);
                            $folders = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (count($folders) === 0) {
                              echo '<p class="text-center">No class added Yet!</p>';
                            } else {
                              foreach ($folders as $folder): ?>
                                <option value="<?= $folder['name']; ?>"> <?= $folder['name'] ?></option>
                              <?php endforeach;
                            } ?>
                          </select>
                          <div class="invalid-feedback"> Please select a folder. </div>
                        </div>
                      </div>
                      <!-- /.form-row -->

                      <div class="mb-3">
                        <p class="mb-2">Permission</p>
                        <div class="form-row">
                          <div class="col-md-6">
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="customControlValidation23"
                                name="permission" checked required value='1'>
                              <label class="custom-control-label" for="customControlValidation23">Private</label>
                              <p class="text-muted"> Only I & management will be able to see this. </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="custom-control custom-radio mb-3">
                              <input type="radio" class="custom-control-input" id="customControlValidation34"
                                name="permission" required value='2'>
                              <label class="custom-control-label" for="customControlValidation34">Public</label>
                              <p class="text-muted"> Others will be able to see this.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4">
                          <div class="form-group mb-3">
                            <p class="mb-3">Available To Teachers</p>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" checked class="custom-control-input" id="customSwitch1"
                                name='students'>
                              <label class="custom-control-label" for="customSwitch1">Yes</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group mb-3">
                            <p class="mb-3">Available To Parents</p>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitch2" name='students'>
                              <label class="custom-control-label" for="customSwitch2">Yes</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group mb-3">
                            <p class="mb-3">Available To Students</p>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitch3" name='students'>
                              <label class="custom-control-label" for="customSwitch3">Yes</label>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- upload area -->
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required name="file">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Please select what to upload</div>
                      </div>


                      <button class="btn btn-primary" style="margin-top: 15px; width: 100%;" type="submit">Submit
                        Upload</button>

                  </form>
                  <!-- Preview -->
                  <!-- <div class="dropzone-previews mt-3" id="file-previews"></div> -->
                  <!-- file preview template -->
                  <div class="d-none" id="uploadPreviewTemplate">
                    <div class="card mt-1 mb-0 shadow-none border">
                      <div class="p-2">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                          </div>
                          <div class="col pl-0">
                            <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                          </div>
                          <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                              <i class="dripicons-cross"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Control Panel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-5">
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-success justify-content-center">
                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Control area</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Admission</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>E-Learning</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Virtual Meetings</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Library Management</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Human Resources</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Assessments</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> <!-- main -->

  </div> <!-- .wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src='js/daterangepicker.js'></script>
  <script src='js/jquery.stickOnScroll.js'></script>
  <script src="js/tinycolor-min.js"></script>
  <script src="js/config.js"></script>
  <script src='js/jquery.mask.min.js'></script>
  <script src='js/select2.min.js'></script>
  <script src='js/jquery.steps.min.js'></script>
  <script src='js/jquery.validate.min.js'></script>
  <script src='js/jquery.timepicker.js'></script>
  <script src='js/dropzone.min.js'></script>
  <script src='js/uppy.min.js'></script>
  <script src='js/quill.min.js'></script>
  <script>
    $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
    $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
    $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
    $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
    /** date range picker */
    if ($('.datetimes').length) {
      $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
    $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
    $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
      var toolbarOptions = [
        [
          {
            'font': []
          }],
        [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [
          {
            'header': 1
          },
          {
            'header': 2
          }],
        [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
        [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
        [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
        [
          {
            'direction': 'rtl'
          }], // text direction
        [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
        [
          {
            'align': []
          }],
        ['clean'] // remove formatting button
      ];
      var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

  <script>
    // Initialize Tus client
    const tusEndpoint = 'file-manager/upload'; // Replace with your Tus server endpoint
    const tus = new tus.Upload({
      endpoint: tusEndpoint,
      retryDelays: [0, 3000, 5000, 10000, 20000], // Retry delays in milliseconds
      onError: (error) => {
        console.error('Upload failed:', error);
      },
      onSuccess: () => {
        console.log('Upload complete!');
      }
    });

    // Initialize Uppy with local file storage
    const uppy = Uppy.Core().use(Uppy.Dashboard, {
      inline: true,
      target: '#drag-drop-area',
      proudlyDisplayPoweredByUppy: false,
      width: 770,
      height: 210,
    }).use(Uppy.Webcam);

    // Listen for file upload
    uppy.on('file-added', (file) => {
      const reader = new FileReader();
      reader.onload = (event) => {
        const chunkSize = 1024 * 1024; // 1 MB chunk size (adjust as needed)
        const fileData = event.target.result;
        const chunks = [];
        for (let offset = 0; offset < fileData.byteLength; offset += chunkSize) {
          const chunk = fileData.slice(offset, offset + chunkSize);
          chunks.push(chunk);
        }
        // Store chunks in local storage (example uses IndexedDB)
        storeChunksLocally(chunks, file.name);
        // Start Tus upload
        tus.upload(file.data, {
          metadata: {
            filename: file.name,
            filetype: file.type
          }
        });
      };
      reader.readAsArrayBuffer(file.data);
    });

    // Function to store chunks in local storage
    function storeChunksLocally(chunks, fileName) {
      // Example: store chunks in IndexedDB
      const dbRequest = indexedDB.open('fileChunksDB', 1);
      dbRequest.onerror = (event) => {
        console.error('IndexedDB error:', event.target.error);
      };
      dbRequest.onsuccess = (event) => {
        const db = event.target.result;
        const transaction = db.transaction('chunks', 'readwrite');
        const store = transaction.objectStore('chunks');
        chunks.forEach((chunk, index) => {
          const chunkData = { fileName, index, chunk };
          store.add(chunkData);
        });
      };
    }
  </script>

  <!-- <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: '/file-manager/upload'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script> -->
  <script src="js/apps.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
</body>

</html>