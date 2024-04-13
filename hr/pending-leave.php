<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Pending - Leave | Rinda AMS</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="../css/simplebar.css">
  <!-- Fonts CSS -->
  <link
    href="overpass-font.css"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="../css/feather.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap4.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="../css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="../css/app-dark.css" id="darkTheme" disabled>
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
            <div class="text-right" style="margin-right: 10%;">
              <p style="padding: 0%; margin: 0%;">sirabdul@strad.africa</p>
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
          <span>Staffs</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fe fe-codesandbox fe-16"></i>
              <span class="ml-3 item-text">Staffs Directory</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="department.php">
              <i class="fe fe-users fe-16"></i>
              <span class="ml-3 item-text">Department</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="designation.php">
              <i class="fe fe-book fe-16"></i>
              <span class="ml-3 item-text">Designation</span>
              </i>
            </a>
          </li>
          




          <!-- Leave -->
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Leave</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
              <a class="nav-link" href="leave-application.php">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Leave Application</span>
                </i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="leave-category.php">
                <i class="fe fe-copy fe-16"></i>
                <span class="ml-3 item-text">Leave Category</span>
                </i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="approved-leave.php">
                <i class="fe fe-server fe-16"></i>
                <span class="ml-3 item-text">Approved Leave</span>
                </i>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-primary" href="#">
                <i class="fe fe-fast-forward fe-16"></i>
                <span class="ml-3 item-text">Pending Requests</span>
                </i>
              </a>
            </li>
          </ul>

          <!-- Extras -->
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Extras</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Attendance</span>
                </i>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fe fe-copy fe-16"></i>
                <span class="ml-3 item-text">Message</span>
                </i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fe fe-server fe-16"></i>
                <span class="ml-3 item-text">Payroll</span>
                </i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fe fe-fast-forward fe-16"></i>
                <span class="ml-3 item-text">Penalties</span>
                </i>
              </a>
            </li>
          </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="mb-2 page-title">Pending Leave Requests</h2>
           
            <div class="row my-4">
              <!-- Small table -->
              <div class="col-md-12">
                <div class="card shadow">
                  <div class="card-body">
                    <!-- table -->
                    <table class="table datatables" id="dataTable-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Apply Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>Ahmad Isah</td>
                          <td>Sick Leave</td>
                          <td>06-01-2024</td>
                          <td>11-01-2024</td>
                          <td>14-01-2024</td>
                          <td>Pending Approval</td>
                          <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                          <td>2</td>
                          <td>Fatima Ali</td>
                          <td>Study Leave</td>
                          <td>10-02-2024</td>
                          <td>15-02-2024</td>
                          <td>08-02-2024</td>
                          <td>Pending Approval</td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                          <td>3</td>
                          <td>Ali Khan</td>
                          <td>Maternity Leave</td>
                          <td>20-02-2024</td>
                          <td>20-03-2024</td>
                          <td>15-02-2024</td>
                          <td>Denied</td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                          <td>4</td>
                          <td>Amirah Hassan</td>
                          <td>Annual Leave</td>
                          <td>05-03-2024</td>
                          <td>20-03-2024</td>
                          <td>01-03-2024</td>
                          <td>Pending Approval</td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                          <td>5</td>
                          <td>Khalid Ahmed</td>
                          <td>Personal Leave</td>
                          <td>10-03-2024</td>
                          <td>12-03-2024</td>
                          <td>08-03-2024</td>
                          <td>Denied</td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr>
                          <td>6</td>
                          <td>Nadia Farooq</td>
                          <td>Training Leave</td>
                          <td>15-03-2024</td>
                          <td>20-03-2024</td>
                          <td>12-03-2024</td>
                          <td>Denied</td>
                          <td>
                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Extend</a>
                              <a class="dropdown-item" href="#">Terminate</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div> <!-- simple table -->
            </div> <!-- end section -->
          </div> <!-- .col-12 -->
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
      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog"
          aria-labelledby="defaultModalLabel" aria-hidden="true">
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
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Dashboard</p>
                  </div>
                  <div class="col-6 text-center">
                    <a href="../academics/" target="_blank" style="text-decoration: none;" class="text-white">
                      <div class="squircle bg-primary justify-content-center">
                        <i class="fe fe-user-plus fe-32 align-self-center text-white"></i>
                      </div>
                      <p>Academics</p>
                    </a>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-trello fe-32 align-self-center text-white"></i>
                    </div>
                    <p>E-Learning</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-mail fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Messages</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-book fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Library</p>
                  </div>
                  <div class="col-6 text-center">
                    <a href="#" style="text-decoration: none;" class="text-success">
                      <div class="squircle bg-success justify-content-center">
                        <i class="fe fe-users fe-32 align-self-center text-white"></i>
                      </div>
                      <p>HR</p>
                    </a>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-check-circle fe-32 align-self-center text-white"></i>
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
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/moment.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/simplebar.min.js"></script>
  <script src='../js/daterangepicker.js'></script>
  <script src='../js/jquery.stickOnScroll.js'></script>
  <script src="../js/tinycolor-min.js"></script>
  <script src="../js/config.js"></script>
  <script src='../js/jquery.dataTables.min.js'></script>
  <script src='../js/dataTables.bootstrap4.min.js'></script>
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
  <script src="../js/apps.js"></script>
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