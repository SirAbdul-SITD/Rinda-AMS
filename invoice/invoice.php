<?php require '../settings.php'; ?>
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
  <link rel="stylesheet" href="../css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="overpass-font.css" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="../css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="../css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="../css/app-dark.css" id="darkTheme" disabled>
  <style>
    .card {
      border-radius: 8px;
    }

    @media print {
    table {
        /* Reset margins and padding */
        margin: 0;
        padding: 0;
        
        /* Adjust width if necessary */
        width: 100%;
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
          <li class="nav-item active dropdown">
            <a href="#account-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-dollar-sign fe-16"></i>
              <span class="ml-3 item-text">Account</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="account-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="../fees-type.php"><span class="ml-1 item-text">Fees Type</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3 text-primary" href="index.php"><span class="ml-1 item-text">Invoices</span></a>
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
          <?php
          // Retrieve invoice data from the database
          $invoiceId = $_GET['id']; // Assuming you pass the invoice ID via GET parameter
          $query = "SELECT * FROM invoice WHERE id = :id";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(':id', $invoiceId, PDO::PARAM_INT);
          $stmt->execute();
          $invoice = $stmt->fetch(PDO::FETCH_ASSOC);

          // Retrieve invoice items data from the database
          $query = "SELECT * FROM invoice_item WHERE invoice_id = :invoice_id";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(':invoice_id', $invoiceId, PDO::PARAM_INT);
          $stmt->execute();
          $invoiceItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

          // Retrieve student name
          $studentId = $invoice['student_id'];
          $query = "SELECT * FROM students WHERE id = :id";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam(':id', $studentId, PDO::PARAM_INT);
          $stmt->execute();
          $student = $stmt->fetch(PDO::FETCH_ASSOC);

          // Function to calculate the total amount of invoice items
          function calculateTotalAmount($invoiceId)
          {
            global $pdo; // Assuming $pdo is your PDO database connection object
          
            // Prepare SQL query to sum the total amount of invoice items
            $stmt = $pdo->prepare("SELECT SUM(amount) AS total_amount FROM invoice_item WHERE invoice_id = :invoice_id");
            $stmt->bindParam(':invoice_id', $invoiceId, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['total_amount'] ?? 0;
          }

          // Function to calculate the total paid amount
          function calculatePaidAmount($invoiceId)
          {
            global $pdo; // Assuming $pdo is your PDO database connection object
          
            // Prepare SQL query to sum the total paid amount
            $stmt = $pdo->prepare("SELECT SUM(amount) AS total_paid FROM invoice_item WHERE invoice_id = :invoice_id AND status = 'paid'");
            $stmt->bindParam(':invoice_id', $invoiceId, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['total_paid'] ?? 0;
          }
          ?>

          <div class="col-12 col-lg-10 col-xl-8">
            <div class="row align-items-center mb-4">
              <div class="col">
                <h2 class="h5 page-title"><small class="text-muted text-uppercase">Invoice</small><br />#
                  <?= $invoice['invoice_number'] ?>
                </h2>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-secondary"  onclick="printDiv('invoice')">Print</button>
                <button type="button" class="btn btn-primary">Pay</button>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-body p-5"  id="invoice">
                <div class="row mb-4">
                  <div class="col-12 text-center mb-4">
                    <img src="../assets/images/logo.svg" class="navbar-brand-img brand-sm mx-auto mb-4" alt="...">
                    <h2 class="mb-0 text-uppercase">Invoice</h2>
                    <p class="text-muted">
                      <?= $school_name ?>
                    </p>
                  </div>
                  <div class="col-md-5">
                    <p class="mb-4">
                    <p class="small text-muted text-uppercase mb-2">Invoice from</p>
                    <strong>
                      <?= $school_name ?>
                    </strong><br /> <br />
                    <?= $school_address ?> <br />
                    </p>
                  </div>

                  <div class="col-md-2"></div>

                  <div class="col-md-5">
                    <p class="mb-4">
                    <p class="small text-muted text-uppercase mb-2">Invoice To</p>
                    <strong>
                      <?= $invoice['student_name'] ?>
                    </strong><br /> <br />
                    <?= $student['address'] ?> <br />

                    </p>
                  </div>
                </div> <!-- /.row -->
                <div class="row mb-4">

                  <div class="col-md-7">

                    <p>
                      <span class="small text-muted text-uppercase">Invoice #</span><br />
                      <strong>
                        <?= $invoice['invoice_number'] ?>
                      </strong>
                    </p>
                  </div>
                  <div class="col-md-5">

                    <p>
                      <small class="small text-muted text-uppercase">Due date</small><br />
                      <strong>
                        <?= $invoice['due_date'] ?>
                      </strong>
                    </p>
                  </div>
                </div> <!-- /.row -->
                <table class="table table-borderless table-striped align-self-center">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Description</th>
                      <th scope="col" class="text-right">Amount</th>
                      <th scope="col" class="text-right">Qty</th>
                      <th scope="col" class="text-right">Total</th>
                      <th scope="col" class="text-right">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($invoiceItems as $index => $item): ?>
                      <tr>
                        <th scope="row">
                          <?= $index + 1 ?>
                        </th>
                        <td>
                          <?= $item['description'] ?>
                        </td>
                        <td class="text-right">
                          <?= '$' . number_format($item['unit_price'], 2) ?>
                        </td>
                        <td class="text-right">
                          <?= $item['quantity'] ?>
                        </td>
                        <td class="text-right">
                          <?= '$' . number_format($item['unit_price'] * $item['quantity'], 2) ?>
                        </td>
                        <td>
                          <?php
                          if ($item['status'] == 'paid') {
                            $status = 'Paid';
                            $badgeClass = 'badge-success';
                          } else {
                            $status = 'Pending';
                            $badgeClass = 'badge-warning';
                          }
                          ?>
                          <span class="badge <?= $badgeClass ?>"><?= $status ?></span>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <div class="row mt-5">
                  <div class="col-2 text-center">
                    <!-- <img src="../assets/images/qrcode.svg" class="navbar-brand-img brand-sm mx-auto my-4" alt="..."> -->
                  </div>
                  <div class="col-md-5">
                    <!-- <p class="text-muted small">
                      <strong>Note :</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit
                      nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar aliquam.
                    </p> -->
                  </div>
                  <?php
                  // Assuming $totalAmount, $paidAmount, and $balance are defined or calculated somewhere in your PHP code
                  $totalAmount = calculateTotalAmount($invoiceId); // Example function to calculate total amount
                  $paidAmount = calculatePaidAmount($invoiceId); // Example function to calculate paid amount
                  $balance = $totalAmount - $paidAmount; // Calculate the balance
                  ?>

                  <div class="col-md-5">
                    <div class="text-right mr-2">
                      <p class="mb-2 h6">
                        <span class="text-muted">Invoice Total : </span>
                        <strong>$
                          <?= number_format($totalAmount, 2) ?>
                        </strong>
                      </p>
                      <p class="mb-2 h6">
                        <span class="text-muted">Total Paid : </span>
                        <strong>$
                          <?= number_format($paidAmount, 2) ?>
                        </strong>
                      </p>
                      <p class="mb-2 h6">
                        <span class="text-muted">Total Outstanding: </span>
                        <span>$
                          <?= number_format($balance, 2) ?>
                        </span>
                      </p>
                    </div>
                  </div>

                </div> <!-- /.row -->
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          
          </div> <!-- /.col-12 -->
        
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
  
<script>
function printDiv(divId) {
    var content = document.getElementById(divId).innerHTML;
    var printWindow = window.open('', '_blank');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print</title></head><body>' + content + '</body></html>');
    printWindow.document.close();
    printWindow.print();
}
</script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/moment.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/simplebar.min.js"></script>
  <script src='../js/daterangepicker.js'></script>
  <script src='../js/jquery.stickOnScroll.js'></script>
  <script src="../js/tinycolor-min.js"></script>
  <script src="../js/config.js"></script>
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