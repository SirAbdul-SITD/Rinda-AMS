<?php require 'settings.php'; ?>
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
  <link href="overpass-font.css" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="css/feather.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
  <script src="jquery-3.6.0.min.js"></script>
  <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
  <!-- Bootstrap CSS (if not already included) -->
  <style>
    /* Additional CSS styling for the video player */
    .video-container {
      position: relative;
      padding-top: 56.25%;

    }

    #videoPlayer {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    /* Center the play button */
    .vjs-big-play-button {
      /* top: 50%;
      left: 50%; */
      transform: translate(200%, 200%);
    }

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
              <li class="nav-item">
                <a class="nav-link pl-3" href="../expense.php"><span class="ml-1 item-text">Expense</span></a>
              </li>
            </ul>
          </li>
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
          <!-- Study materials -->
          <li class="nav-item active dropdown">
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
                <a class="nav-link pl-3 text-primary" href="audio.php"><span class="ml-1 item-text">Audio</span></a>
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
          <div class="col-md-12">
            <div class="border-top">
              <div class="file-panel mt-4">
                <div class="row align-items-center mb-4">
                  <div class="col">
                    <h3 class="page-title">Audio</h3>
                  </div>
                </div>
                <!-- .row -->
                <hr class="my-4">
                <div class="row my-4 pb-4">

                  <?php
                  $type = 'audio';
                  $query = "SELECT * FROM files WHERE type = :type ORDER BY `files`.`title` ASC";
                  $stmt = $pdo->prepare($query);
                  $stmt->execute(['type' => $type]);
                  $audio = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  if (count($audio) === 0) {
                    echo '<p class="text-center">None added Yet!</p>';
                  } else {
                    foreach ($audio as $index => $aud): ?>

                      <div class="col-md-3 audio-card">
                        <div class="card shadow text-center mb-4">
                          <div class="card-body file">
                            <div class="file-action">
                              <button type="button"
                                class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu m-2">
                                <a class="dropdown-item edit" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>edit</a>
                                <a class="dropdown-item delete" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                <a class="dropdown-item share" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                                <a class="dropdown-item download" href="download-audio.php?id=<?= $aud['id']; ?>"><i
                                    class="fe fe-download fe-12 mr-4"></i>Download</a>
                              </div>
                            </div>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#yourModal"
                              data-src="file-manager/audio/<?= $aud['title'] ?>.<?= $aud['extension'] ?>">
                              <div class="circle circle-lg bg-light my-4">
                                <span class="fe fe-music fe-24 text-info"></span>
                              </div>
                              <div class="file-info">
                                <span class="badge badge-light text-muted mr-2 vid-subject"
                                  id="audiosubject-<?= $aud['id'] ?>"><?= $aud['subject'] ?></span>
                                <span class="badge badge-pill badge-light text-muted vid-class"
                                  id="audioclass-<?= $aud['id'] ?>"><?= $aud['class'] ?></span>
                              </div>
                            </button>

                            <div class="modal fade modal-full" id="yourModal" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="audio-container">
                                      <audio id="audioPlayer" controls preload="auto">
                                        <source src="file-manager/audio/<?= $aud['title'] ?>.<?= $aud['extension'] ?>"
                                          type="audio/<?= $aud['extension'] ?>">
                                        <!-- Other audio sources if needed -->
                                      </audio>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div> <!-- .card-body -->
                          <div class="card-footer bg-transparent border-0 fname">
                            <span class="audio-id d-none">
                              <?= $aud['id'] ?>
                            </span>
                            <strong class="audio-title" id="audiotitle-<?= $aud['id'] ?>"><?= $aud['title'] ?></strong>
                          </div> <!-- .card-footer -->
                        </div> <!-- .card -->
                      </div><!-- .col -->
                    <?php endforeach;
                  } ?>




                  <!-- edit -->
                  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel">Edit Audio Info</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="editForm">
                            <div class="form-group">
                              <label for="video-name" class="col-form-label">Title:</label>
                              <input type="text" class="form-control" id="edit-audio-name">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="edit-custom-class">Class <span><small>optional</small></span></label>
                                <select class="custom-select" id="edit-custom-class" name="class">
                                  <!-- Options for class -->
                                  <option value="" selected disabled>Select</option>
                                  <option value="Grade 1">Grade 1</option>
                                  <option value="Grade 2">Grade 2</option>
                                  <option value="Grade 3">Grade 3</option>
                                  <option value="Grade 3">Grade 4</option>
                                  <option value="Grade 3">Grade 5</option>
                                  <option value="Grade 3">Grade 6</option>
                                  <option value="Grade 3">Grade 7</option>
                                  <option value="Grade 3">Grade 8</option>
                                  <option value="Grade 3">Grade 9</option>
                                  <option value="Grade 3">Grade 10</option>
                                  <option value="Grade 3">Grade 11</option>
                                  <option value="Grade 3">Grade 12</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="edit-custom-subject">Subject <span><small>optional</small></span></label>
                                <select class="custom-select" id="edit-custom-subject" name="subject">
                                  <!-- Options for subject -->
                                  <option value="Mathematics">Mathematics</option>
                                  <option value="English">English</option>
                                  <option value="Computer">Computer</option>
                                </select>
                              </div>
                              <input type="hidden" id="edit-audio-id" value="" name="vi-id">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn mb-2 btn-primary" id="saveChangesBtn">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <script>
                    $(document).ready(function () {
                      // Event listener for the edit option
                      $('.dropdown-item.edit').on('click', function () {
                        var card = $(this).closest('.card');
                        var audioId = card.find('.audio-id').text();
                        var audiotitle = card.find('.audio-title').text();
                        var audioclass = card.find('.vid-class').text();
                        var audiosubject = card.find('.vid-subject').text();

                        $('#edit-audio-id').val(audioId);
                        $('#edit-audio-name').val(audiotitle);
                        $('#edit-custom-class').val(audioclass);
                        $('#edit-custom-subject').val(audiosubject);

                        $('#editModal').modal('show');
                      });

                      // Event listener for saving changes
                      $('#saveChangesBtn').on('click', function () {
                        var audioIdentity = $('#edit-audio-id').val();
                        var newTitle = $('#edit-audio-name').val();
                        var newClass = $('#edit-custom-class').val();
                        var newSubject = $('#edit-custom-subject').val();

                        // Perform AJAX request to update video information in the database
                        $.ajax({
                          url: 'update-audio.php',
                          type: 'POST',
                          data: {
                            id: audioIdentity,
                            title: newTitle,
                            class: newClass,
                            subject: newSubject
                          },
                          success: function (response) {
                            // Handle success
                            console.log(response);
                            // Optionally update the UI to reflect the changes
                            // For example, update the title of the video card
                            $('#audiotitle-' + audioIdentity).text = newTitle;
                            $('#audiosubject-' + audioIdentity).text = newSubject;
                            $('#audioclass-' + audioIdentity).text = newClass;
                            // Close the edit modal
                            $('#editModal').modal('hide');
                          },
                          error: function (xhr, status, error) {
                            // Handle error
                            console.error(xhr.responseText);
                          }
                        });
                      });
                    });

                  </script>

                  <!-- end edit -->


                  <!-- Confirm delete Modal -->
                  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="confirmDeleteModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="confirmDeleteModalTitle">Confirm Delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this audio?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Delete -->

                  <script>
                    $(document).ready(function () {
                      // Event listener for the delete option
                      $('.dropdown-item.delete').on('click', function (event) {
                        event.preventDefault();
                        var card = $(this).closest('.card');
                        var audioId = card.find('.audio-id').text();
                        var audioCard = $(this).closest('.audio-card');


                        // Show the confirmation modal
                        $('#confirmDeleteModal').modal('show');

                        // Event listener for the confirm delete button inside the modal
                        $('#confirmDeleteBtn').on('click', function () {
                          // Send AJAX request to delete the document
                          $.ajax({
                            url: 'delete-audio.php',
                            type: 'POST',
                            data: { id: audioId },
                            success: function (response) {
                              // Handle success
                              console.log(response);
                              // Optionally remove the row from the table
                              audioCard.remove();
                            },
                            error: function (xhr, status, error) {
                              // Handle error
                              console.error(xhr.responseText);
                            }
                          });

                          // Close the confirmation modal
                          $('#confirmDeleteModal').modal('hide');
                        });
                      });
                    });
                  </script>

                  <!-- End delete -->



                   <!-- share -->
                  <!-- Share Modal -->
                  <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="shareModalTitle">Share Document</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Copy the link below to share this audio:</p>
                          <input type="text" id="shareLink" class="form-control" readonly>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <script>
                    $(document).ready(function () {
                      $('.dropdown-item.share').on('click', function () {
                        var card = $(this).closest('.card');
                        var audioId = card.find('.audio-id').text();
                        var shareLink = window.location.origin + '/view-audio.php?id=' + audioId;
                        $('#shareLink').val(shareLink);
                        $('#shareModal').modal('show');
                      });
                    });
                  </script>

                  <!-- end of share -->

                </div> <!-- .row -->

              </div> <!-- .file-panel -->
            </div> <!-- .file-container -->
          </div> <!-- .col -->
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
  <script src="js/d3.min.js"></script>
  <script src="js/topojson.min.js"></script>
  <script src="js/datamaps.all.min.js"></script>
  <script src="js/datamaps-zoomto.js"></script>
  <script src="js/datamaps.custom.js"></script>
  <script src="js/Chart.min.js"></script>



  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="js/gauge.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/apexcharts.min.js"></script>
  <script src="js/apexcharts.custom.js"></script>
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