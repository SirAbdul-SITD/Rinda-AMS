<?php require '../settings.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Types - Assessments | Rinda AMS</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="../css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="overpass-font.css" rel="stylesheet">
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

    @media (max-width: 768px) {
      .desktop {
        display: none;
        min-width: 720px;
      }
    }


    @media (min-width: 768px) {
      .mobile {
        display: none;
        min-width: 720px;
      }
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
          <span>Questions</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item">
            <a class="nav-link" href="question-bank.php">
              <i class="fe fe-codesandbox fe-16"></i>
              <span class="ml-3 item-text">Bank</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="generate.php">
              <i class="fe fe-sliders fe-16"></i>
              <span class="ml-3 item-text">Generate</span>
              </i>
            </a>
          </li>
        </ul>

        <!-- Academics -->
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>Assessment</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item active">
            <a class="nav-link text-primary" href="#">
              <i class="fe fe-list fe-16"></i>
              <span class="ml-3 item-text">Types</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subjects.php">
              <i class="fe fe-check-circle fe-16"></i>
              <span class="ml-3 item-text">Mark by subject</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="students.php">
              <i class="fe fe-user-check fe-16"></i>
              <span class="ml-3 item-text">Mark by student</span>
              </i>
            </a>
          </li>
        </ul>

        <!-- Academics -->
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>Results</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item">
            <a class="nav-link" href="add-remarks.php">
              <i class="fe fe-edit-3 fe-16"></i>
              <span class="ml-3 item-text">Add remarks</span>
              </i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compile.php">
              <i class="fe fe-tool fe-16"></i>
              <span class="ml-3 item-text">Compile results</span>
              </i>
            </a>
          </li>
        </ul>

      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <!-- Small table -->
            <div class="col-md-12 my-4">
              <div class="row align-items-center my-3">
                <div class="col">
                  <h2 class="h4 mb-1">Assessment types</h2>
                  <p class="mb-3">Discover and Manage Assessment Types -
                    Here, you can explore existing assessment types, add new ones, and set their duration and total
                    marks."</p>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModel"><span
                      class="fe fe-plus fe-16 mr-3"></span>New</button>
                </div>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="toolbar">
                    <form class="form">
                      <div class="form-row">

                        <div class="form-group col-auto">
                          <label for="search" class="sr-only">Search</label>
                          <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- table -->
                  <?php
                  // Query to select all departments
                  $query = "SELECT a.*, c.class FROM assessment_types a INNER JOIN classes c ON a.class_id = c.id ORDER BY a.assessment_type ASC";
                  $stmt = $pdo->prepare($query);
                  $stmt->execute();
                  $assessment_types = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  if (count($assessment_types) === 0) {
                    echo '<div class="text-center">None Added Yet!</div>';
                  } else {
                    ?>
                    <table class="table table-borderless table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th>Marks</th>
                          <th>Class</th>
                          <th>Start</th>
                          <th>Deadline</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($assessment_types as $index => $assessment_type): ?>
                          <tr>
                            <td>
                              <?= $index + 1 ?>
                            </td>
                            <td>
                              <p class="mb-0 text-muted">
                                <strong class="mb-0 text-muted assessment_type-name"
                                  data-assessment_type-id="<?= $assessment_type['assessment_id'] ?>">
                                  <?= $assessment_type['assessment_type'] ?>
                                </strong>
                                <input type="hidden" class="assessment_type-id"
                                  value="<?= $assessment_type['assessment_id'] ?>">
                                <input type="hidden" class="assessment_type-class-id"
                                  value="<?= $assessment_type['class_id'] ?>">
                              </p>
                            </td>
                            <td>
                              <p class="mb-0 text-muted">
                                <strong class="mb-0 text-muted total_marks">
                                  <?= $assessment_type['marks'] ?>
                                </strong>
                              </p>
                            </td>
                            <td>
                              <p class="mb-0 text-muted">
                                <strong class="mb-0 text-muted class-name">
                                  <?= $assessment_type['class'] ?>
                                </strong>
                              </p>
                            </td>
                            <td>
                              <p class="mb-0 text-muted">
                                <strong class="mb-0 text-muted start-week">
                                  <?= $assessment_type['start'] ?>
                                </strong>
                              </p>
                            </td>
                            <td>
                              <p class="mb-0 text-muted">
                                <strong class="mb-0 text-muted deadline-week">
                                  <?= $assessment_type['deadline'] ?>
                                </strong>
                              </p>
                            </td>
                            <td>
                              <button class="btn btn-sm btn-primary edit-button" type="button">
                                <i class="fe fe-edit"></i> Edit
                              </button>
                              <button class="btn btn-sm btn-danger remove-button" type="button">
                                <i class="fe fe-trash"></i> Remove
                              </button>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  <?php } ?>
                </div>
              </div>
            </div> <!-- customized table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->



      <!-- new Department-->
      <div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModelLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModelLabel">Add Assessment Type *</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="newForm">
                <div class="form-group">
                  <label for="assessment_type-name text-center" class="col-form-label">Assessment Type: *</label>
                  <input type="text" class="form-control required" id="assessment_type-name" required>
                </div>

                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="start-week" class="col-form-label">Start: *</label>
                    <select id="start-week" class="form-control select2 required" required name="start-week" required>
                      <?php
                      $weeks = array('1 week', '2 week', '2 week', '3 week', '4 week', '5 week', '6 week', '7 week', '8 week', '9 week', '10 week', '11 week', '12 week');
                      echo "<option value=''>Select Start Week</option>";
                      foreach ($weeks as $week):
                        echo "<option value='$week'>$week</option>";
                      endforeach;
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="deadline" class="col-form-label">Deadline: *</label>
                    <select id="deadline" class="form-control select2 required" required name="deadline" required>
                      <?php
                      $weeks = array('1 week', '2 week', '3 week', '4 week', '5 week', '6 week', '7 week', '8 week', '9 week', '10 week', '11 week', '12 week');
                      echo "<option value=''>Select Start Week</option>";
                      foreach ($weeks as $week):
                        echo "<option value='$week'>$week</option>";
                      endforeach;
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="class-id" class="col-form-label">Select Class: *</label>
                    <select id="class-id" class="form-control select2 required" required name="class-id" required>
                      <?php
                      $query = "SELECT c.*, s.section FROM classes c INNER JOIN sections s ON c.section_id = s.id ORDER BY s.section";
                      $stmt = $pdo->prepare($query);
                      $stmt->execute();
                      $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      if (count($classes) === 0) {
                        echo '<option value="" selected disabled>None added Yet!</option>';
                      } else {
                        echo "<option value=''>Select Class</option>";
                        foreach ($classes as $class):
                          $x = $class['id'];
                          $y = $class['class'];
                          $z = $class['section'];
                          echo "<option value=$x>$y - $z</option>";
                        endforeach;
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="total_marks" class="col-form-label">Total Marks</label>
                    <input type="number" class="form-control" id="total_marks" name="total_marks">
                  </div>
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn mb-2 btn-primary w-100" id="typeSaveBtn">Add New
                Type</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Edit Department -->
      <div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModelLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModelLabel">Edit Type</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="editForm">
                <div class="form-group">
                  <label for="edit-assessment_type-name" class="col-form-label">Type Title: *</label>
                  <input type="text" class="form-control" id="edit-assessment_type-name" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="edit-start-week" class="col-form-label">Start: *</label>
                    <select id="edit-start-week" class="form-control select2 required" required name="edit-start-week"
                      required>
                      <?php
                      $weeks = array('1 week', '2 week', '3 week', '4 week', '5 week', '6 week', '7 week', '8 week', '9 week', '10 week', '11 week', '12 week');
                      echo "<option value=''>Select Start Week</option>";
                      foreach ($weeks as $week):
                        echo "<option value='$week'>$week</option>";
                      endforeach;
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="edit-deadline" class="col-form-label">Deadline: *</label>
                    <select id="edit-deadline" class="form-control select2 required" required name="edit-deadline"
                      required>
                      <?php
                      $weeks = array('1 week', '2 week', '3 week', '4 week', '5 week', '6 week', '7 week', '8 week', '9 week', '10 week', '11 week', '12 week');
                      echo "<option value=''>Select Start Week</option>";
                      foreach ($weeks as $week):
                        echo "<option value='$week'>$week</option>";
                      endforeach;
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="edit-class-id" class="col-form-label">Select Class</label>
                    <select id="edit-class-id" class="form-control select2" required name="edit-class-id">
                      <?php
                      $query = "SELECT c.*, s.section FROM classes c INNER JOIN sections s ON c.section_id = s.id ORDER BY s.section";
                      $stmt = $pdo->prepare($query);
                      $stmt->execute();
                      $classes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                      if (count($classes) === 0) {
                        echo '<option value="" selected disabled>None added Yet!</option>';
                      } else {
                        echo "<option value=''>Select Class</option>";
                        foreach ($classes as $class):
                          $x = $class['id'];
                          $y = $class['class'];
                          $z = $class['section'];
                          echo "<option value=$x>$y - $z</option>";
                        endforeach;
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="edit-total_marks" class="col-form-label">Total Marks</label>
                    <input type="number" class="form-control" id="edit-total_marks">
                  </div>
                </div>
                <input type="hidden" id="edit-assessment_type-id">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100" id="editAssessmentTypeBtn">Save changes</button>
            </div>
          </div>
        </div>
      </div>



      <!-- RemoveConfirmModal -->
      <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this assessment type?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger confirm-remove">Remove</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5> <button type="button" class="close"
                data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col text-center"> <small><strong>You're well up to date</strong></small>
                      <div class="my-0 text-muted small">No notifications available</div>
                    </div>
                  </div>
                </div>
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal"
                disabled>Clear All</button> </div>
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
                  <a href="#" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">Dashboard</p>
                  </a>
                </div>
                <div class="col-6 text-center">
                  <a href="../academics/" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-user-plus fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">Academics</p>
                  </a>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <a href="../lms" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-trello fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">E-Learning</p>
                  </a>
                </div>
                <div class="col-6 text-center">
                  <a href="#" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-mail fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">Messages</p>
                  </a>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <a href="../shop" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-shopping-bag fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">Shop</p>
                  </a>
                </div>
                <div class="col-6 text-center">
                  <a href="../hr/" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center text-white">
                      <i class="fe fe-users fe-32 align-self-center"></i>
                    </div>
                    <p class="text-primary">HR</p>
                  </a>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <a href="../assessments" style="text-decoration: none;">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-check-circle fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-success">Assessments</p>
                  </a>
                </div>
                <div class="col-6 text-center">
                  <a href="../settings" style="text-decoration: none;">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p class="text-primary">Settings</p>
                  </a>
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






  <script>

    // Function to display a popup message
    function displayPopup(message, success) {
      var popup = document.createElement('div');
      popup.className = 'popup ' + (success ? 'success' : 'error');

      var iconClass = success ? 'fe fe-check-circle' : 'fe fe-x-octagon';
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



    $(document).ready(function () {

      // Event listener for Edit button click
      // Event listener for Edit button click
      $(document).on('click', '.edit-button', function () {
        var assessmentTypeRow = $(this).closest('tr');
        var typeTitle = assessmentTypeRow.find('.assessment_type-name').text().trim();
        var assessmentTypeId = assessmentTypeRow.find('.assessment_type-id').val();
        var classId = assessmentTypeRow.find('.assessment_type-class-id').val();
        var startWeek = assessmentTypeRow.find('.start-week').text().trim();
        var deadlineWeek = assessmentTypeRow.find('.deadline-week').text().trim();
        var totalMarks = assessmentTypeRow.find('.total_marks').text().trim();

        console.log(assessmentTypeId);

        // Populate modal fields with current data
        $('#edit-assessment_type-name').val(typeTitle);
        $('#edit-start-week option').each(function () {
          if ($(this).val() == startWeek) {
            $(this).prop('selected', true);
          }
        });
        $('#edit-deadline option').each(function () {
          if ($(this).val() == deadlineWeek) {
            $(this).prop('selected', true);
          }
        });
        $('#edit-total_marks').val(totalMarks);
        $('#edit-class-id').val(classId);
        $('#edit-assessment_type-id').val(assessmentTypeId);

        // Fetch classes from the server
        $.ajax({
          url: 'fetch-classes.php', // Replace with the actual endpoint
          type: 'GET',
          success: function (response) {
            var classes = JSON.parse(response);
            // Generate dropdown options
            var dropdownOptions = '';
            classes.forEach(function (classItem) {
              var selected = (classItem.id == classId) ? 'selected' : '';
              dropdownOptions += '<option value="' + classItem.id + '" ' + selected + '>' + classItem.class + '</option>';
            });

            // Replace class dropdown with populated options
            $('#edit-class-id').html(dropdownOptions);
          },
          error: function (xhr, status, error) {
            console.error('Error fetching classes:', error);
            // Optionally display an error message to the user
          }
        });

        // Show the edit modal
        $('#editModel').modal('show');
      });




      // Event listener for saving changes
      $('#typeSaveBtn').on('click', function () {
        var Title = $('#assessment_type-name').val();
        var Start = $('#start-week').val();
        var End = $('#deadline').val();
        var Marks = $('#total_marks').val();
        var ClassId = $('#class-id').val();

        // Perform AJAX request to update designation information in the database
        $.ajax({
          url: 'add-type.php',
          type: 'POST',
          data: {
            name: Title,
            start: Start,
            end: End,
            class_id: ClassId,
            marks: Marks
          },
          success: function (response) {
            // Parse the JSON response
            var responseData = JSON.parse(response);
            displayPopup(responseData.message, responseData.success);
            if (responseData.success == true) {
              $('#newModal').modal('hide');
              setTimeout(function () {
                location.reload();
              }, 2000);
            }
          },
          error: function (xhr, status, error) {
            // Display error message
            displayPopup(xhr.responseText, false);
            console.error(xhr.responseText);
          }
        });
      });

      $('#editAssessmentTypeBtn').on('click', function () {
        var newTitle = $('#edit-assessment_type-name').val();
        var newStart = $('#edit-start-week').val();
        var newEnd = $('#edit-deadline').val();
        var newMarks = $('#edit-total_marks').val();
        var newClassId = $('#edit-class-id').val();
        var Id = $('#edit-assessment_type-id').val();

        // Perform AJAX request to update designation information in the database
        $.ajax({
          url: 'update-type.php',
          type: 'POST',
          data: {
            id: Id,
            name: newTitle,
            start: newStart,
            end: newEnd,
            class_id: newClassId,
            marks: newMarks
          },
          success: function (response) {
            // Parse the JSON response
            var responseData = JSON.parse(response);
            displayPopup(responseData.message, responseData.success);
            if (responseData.success == true) {
              $('#editModel').modal('hide');
              setTimeout(function () {
                location.reload();
              }, 2000);
            }
          },
          error: function (xhr, status, error) {
            // Display error message
            displayPopup(xhr.responseText, false);
            console.error(xhr.responseText);
          }
        });
      });


      function removedesignation(element) {
        var designationRow = $(element).closest('tr');
        var typeTitle = designationRow.find('.assessment_type-name');
        var editButton = designationRow.find('.remove-button');
        var id = designationRow.find('.assessment_type-id').val(); // Accessing the value of the designation ID

        // Show confirmation modal
        $('#confirmationModal').modal('show');

        // Add click event listener to the confirmation button
        $('.confirm-remove').off('click').on('click', function () {
          // Send AJAX request to remove the designation
          $.ajax({
            type: 'POST',
            url: 'remove-type.php',
            data: { id: id }, // Pass the designation ID
            dataType: 'json',
            success: function (response) {
              if (response.success) {
                // Remove the row from the table
                designationRow.remove();
                displayPopup(response.message, true);
              } else {
                displayPopup(response.message, false);
              }
            },
            error: function (xhr, status, error) {
              displayPopup('Error occurred during request. Contact Admin', false);
            },
          });

          // Hide the modal after action
          $('#confirmationModal').modal('hide');
        });
      };

      // Event listener for Edit/Save button
      $(document).on('click', '.remove-button', function () {
        removedesignation(this);
      });

    });


  </script>





</body>

</html>