<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Rinda AMS - Rinda AMS</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="overpass-font.css"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
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
              <img src="../assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <div class=" col-12 text-left">
              <p style="padding: 0%; margin: 0%;">
                <?= $full_name; ?>
              </p>
              <strong>
                <?= $account_type; ?>
              </strong>
            </div>
            <hr width="80%">
            <a class="dropdown-item" href="../settings/profile.php">Profile</a>
            <a class="dropdown-item" href="../settings">Settings</a>
            <a class="dropdown-item" href="../logout.php">Log out</a>
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
          <li class="nav-item active dropdown">
            <a href="#asset-management-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Asset Management</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="asset-management-elements">
              <li class="nav-item">
                <a class="nav-link pl-3  text-primary" href="vendors.php"><span class="ml-1 item-text">Vendor</span>
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
          <li class="nav-item dropdown">
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
          </li>
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
          <li class="nav-item dropdown">
            <a href="#study-materials-elements" data-toggle="collapse" aria-expanded="false"
              class="dropdown-toggle nav-link">
              <i class="fe fe-archive fe-16"></i>
              <span class="ml-3 item-text">Study Materials</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="study-materials-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="upload.php"><span class="ml-1 item-text">Upload Content</span>
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
            <div class="row">
              <!-- Small table -->
              <div class="col-md-12 my-4">
                <div class="row align-items-center my-3">
              <div class="col">
                <h3 class="page-title">Vendors</h3>
              </div>
              <div class="col-auto">
                <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#newModal"><span
                    class="fe fe-plus fe-16 mr-3"></span>New</button>
              </div>
            </div>
            <div class="row">
            
              <!-- Small table -->
              <div class="col-md-12 my-4">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="toolbar">
                      <form class="form">
                        <div class="form-row">
                          <div class="form-group col-auto mr-auto">
                            <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                              <option value="">...</option>
                              <option value="1">12</option>
                              <option value="2" selected>32</option>
                              <option value="3">64</option>
                              <option value="3">128</option>
                            </select>
                          </div>
                          <div class="form-group col-auto">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- table -->
                    <table class="table table-borderless table-hover">
                      <thead>
                        <tr>

                          <th>#</th>
                          <th>Vendor</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Contact Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- Row 1 -->
                        <tr>

                          <td>1</td>
                          <td>
                            <p class="mb-0 text-muted"><strong>Hassaan Books Store</strong></p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">hbooks@gmail.com</p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">09012345678</p>
                          </td>
                          <td class="w-25"><small class="text-muted">Umar Isah</small></td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                          <td>2</td>
                          <td>
                            <p class="mb-0 text-muted"><strong>ABC Electronics</strong></p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">abcelectronics@example.com</p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">123-456-7890</p>
                          </td>
                          <td class="w-25"><small class="text-muted">John Smith</small></td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                          <td>3</td>
                          <td>
                            <p class="mb-0 text-muted"><strong>XYZ Technologies</strong></p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">xyztech@example.com</p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">987-654-3210</p>
                          </td>
                          <td class="w-25"><small class="text-muted">Alice Johnson</small></td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                          <td>4</td>
                          <td>
                            <p class="mb-0 text-muted"><strong>LMN Solutions</strong></p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">lmnsolutions@example.com</p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">321-654-9870</p>
                          </td>
                          <td class="w-25"><small class="text-muted">Sarah Johnson</small></td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                          <td>5</td>
                          <td>
                            <p class="mb-0 text-muted"><strong>PQR Solutions</strong></p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">pqrsolutions@example.com</p>
                          </td>
                          <td>
                            <p class="mb-0 text-muted">456-789-0123</p>
                          </td>
                          <td class="w-25"><small class="text-muted">Michael Smith</small></td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Edit</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                      <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item "><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div> <!-- customized table -->
            </div> <!-- end section -->
          </div> <!-- .col-12 -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
     <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"         aria-hidden="true">         <div class="modal-dialog modal-sm" role="document">           <div class="modal-content">             <div class="modal-header">               <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>               <button type="button" class="close" data-dismiss="modal" aria-label="Close">                 <span aria-hidden="true">&times;</span>               </button>             </div>             <div class="modal-body">               <div class="list-group list-group-flush my-n3">                 <div class="list-group-item bg-transparent">                   <div class="row align-items-center">                      <div class="col text-center">                       <small><strong>You're well up to date</strong></small>                       <div class="my-0 text-muted small">No notifications available</div>                     </div>                   </div>                 </div>               </div> <!-- / .list-group -->             </div>             <div class="modal-footer">               <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal" disabled>Clear All</button>             </div>           </div>         </div>       </div>      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
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
  <script src='js/jquery.dataTables.min.js'></script>
  <script src='js/dataTables.bootstrap4.min.js'></script>
  <script>
    $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
  </script>
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