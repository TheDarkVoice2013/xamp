<?php 
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking Licenta</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Booking <sup>Licenta</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php 
                                //username
                                echo "Welcome " . $_SESSION['username'];
                                ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
             
                <div class="filters" style="display:flex; flex-direction: row; justify-content: space-evenly;">
                    <div class="location-filter">
               <label for="Location">Location: </label>
               <input type="text" id="Location" name="Location" placeholder="Enter Location">
               <ul id="location-suggestions" style="display: none;"></ul>
                    </div>
                    <div class="date-filter">
               <label for="Interval">Interval: </label>
               <input type="text" id="interval" name="daterange" placeholder="Enter Interval" />
                    </div>
                    <div class="persons-filter">
               <label for="Persons">Persons: </label>
               <input type="text" id="personInput" placeholder="Select persons" readonly>
                    <div class="dropdownPerson">
                        <div class="dropdown-contentPerson">
                        <div class="input-group">
                            <label for="adults">Adults:</label>
                            <input type="number" id="adults" min="0" value="0">
                        </div>
                        <div class="input-group">
                            <label for="kids">Kids:</label>
                            <input type="number" id="kids" min="0" value="0">
                        </div>
                        <button id="doneBtn">Done!</button>
                        </div>
                    </div>
                    </div>
                    <button id="searchBtn" class="btn btn-primary">Search Hotels</button>
               </div>
                <div id="hotels-list" class="hotels-grid">

                </div>
            </div>
            
            
           
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Booking Licenta 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <style>
    #location-suggestions {
        list-style: none;
        padding: 0;
        margin: 0;
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: auto;
        position: absolute;
        width: 11%;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
        display: none;
    }

    #location-suggestions li {
        padding: 10px;
        cursor: pointer;
    }

    #location-suggestions li:hover {
        background-color: #3498db;
        color: #fff;
    }

    .person-selector {
  position: relative;
}

.dropdownPerson {
  position: absolute;
  display: none;
  z-index: 999;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  padding: 12px 16px;
  margin-top: 5px;
}

.dropdown-contentPerson {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.dropdown-contentPerson label {
  font-weight: bold;
  margin-bottom: 5px;
}

.dropdown-contentPerson .input-group {
  display: flex;
  align-items: center;
}

.dropdown-contentPerson input[type="number"] {
  width: 50px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  text-align: center;
}

.dropdown-contentPerson input[type="number"]:focus {
  outline: none;
  border-color: #4e73df;
  box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
}

#doneBtn {
  padding: 8px 16px;
  background-color: #4e73df;
  color: #ffffff;
  border: none;
  cursor: pointer;
}

#doneBtn:hover {
  background-color: #2653d4;
}

#personInput {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 200px;
  cursor: pointer;
}

#interval {
    padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 200px;
  cursor: pointer;
}

#Location {
    padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 200px;
  cursor: pointer;
}

#personInput:focus {
  outline: none;
  border-color: #4e73df;
  box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
}

.hotels-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
  gap: 16px;
  padding: 16px;
}

/* General card styles */
.hotel-card {
  border: 1px solid #ccc;
  padding: 15px;
  margin: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  perspective: 100px;
  background-color: #ffffff;
  border-radius: 10px;
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: pointer;
}

.hotel-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Image styles */
.hotel-card img {
  width: 100%;
  margin: auto;
  height: auto;
  display: block;
  border: 1px solid #ccc;
  border-radius: 10px;
  transition: transform 0.3s;
}

.hotel-card img:hover {
  transform: scale(1.05);
}



/* Info section styles */
.hotel-info {
  text-align: center;
  padding-top: 10px;
}

.hotel-info h3 {
  font-size: 1.5em;
  color: #333;
  margin: 10px 0;
}

.hotel-info p {
  font-size: 1em;
  color: #666;
  margin: 5px 0;
}

.hotel-info .location {
  font-size: 0.9em;
  color: #999;
  display: block;
  margin-top: 10px;
}

/* Price styles */
.hotel-info .price {
  font-size: 1.2em;
  color: #e74c3c;
  margin-top: 10px;
  font-weight: bold;
}

@keyframes hoverEffect {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

.hotel-card:hover {
  animation: hoverEffect 0.6s ease-in-out forwards;
}


.hotel-info {
  margin-top: 10px;
  color: #000;
}

.hotel-info h3 {
  font-size: 18px;
  margin-bottom: 5px;
}

.hotel-info p {
  margin-bottom: 10px;
}

</style>

    <script>

          $(document).ready(function() {
          $('#Location').on('keyup', function() {
          var searchTerm = $(this).val();
          const targetUl = $('#location-suggestions');

            if (searchTerm.trim() === '') {
                targetUl.hide(); 
                return;
            }
          $.ajax({
               url: 'get_locations.php',
               data: {
               searchTerm: searchTerm
               },
               method: 'POST',
               success: function(data) {
               
               var parsedData = JSON.parse(data);
               var hotelNames = [];
               targetUl.empty();
               console.log(parsedData)
                   
                    for (var location of parsedData) {
                        
                        (function(location) {
                            var suggestion = $('<li>' + location + '</li>');

                            
                            suggestion.click(function() {
                                $('#Location').val(location);
                                targetUl.hide(); 
                            });

                            targetUl.append(suggestion);
                        })(location);
                    }

                    
                    targetUl.show().css({
                        top: $('#Location').position().top + $('#Location').outerHeight(),
                        left: $('#Location').position().left
                    });
               }
          });
          });
          $(document).on('click', function(event) {
            if (!$(event.target).closest('#Location, #location-suggestions').length) {
                $('#location-suggestions').hide();
            }
        });
          });
          
          
document.addEventListener("DOMContentLoaded", function() {
  var personInput = document.getElementById("personInput");
  var dropdown = document.querySelector(".dropdownPerson"); // Update the selector
  var doneBtn = document.getElementById("doneBtn");

  personInput.addEventListener("click", function() {
    dropdown.style.display = "block";
  });

  doneBtn.addEventListener("click", function() {
    var adults = document.getElementById("adults").value;
    var kids = document.getElementById("kids").value;
    personInput.value = "Adults: " + adults + ", Kids: " + kids;
    dropdown.style.display = "none";
  });

  document.addEventListener("click", function(event) {
    if (!event.target.closest(".persons-filter")) {
      dropdown.style.display = "none";
    }
  });
});
function formatDate(dateString) {
  var parts = dateString.split('/');
  // Format: YYYY-MM-DD
  return parts[2] + '-' + parts[0].padStart(2, '0') + '-' + parts[1].padStart(2, '0');
}
$(document).ready(function() {
  $('#searchBtn').on('click', function() {
    var location = $('#Location').val();
    var interval = $('#interval').val();
    var adults = $('#adults').val();
    var kids = $('#kids').val();
    var dates = interval.split(' - ');
var startDate = dates[0];
var endDate = dates[1];

// Format the dates as YYYY-MM-DD
var formattedStartDate = formatDate(startDate);
var formattedEndDate = formatDate(endDate);

    $.ajax({
      url: 'get_filtered_hotels.php',
      method: 'POST',
      data: {
        location: location,
        startDate: formattedStartDate,
        endDate: formattedEndDate,
        adults: adults,
        kids: kids
      },
      success: function(response) {
        var hotelsData = JSON.parse(response);
        console.log(response)
        if (hotelsData.length > 0) {
          $('#hotels-list').empty();
            
          for (hotel of hotelsData) {
            var imageURL = hotel.image;
            var description = hotel.description;
            var location = hotel.location;
            var hotelName = hotel.name;
            var price = hotel.pret;
            
            var hotelCard = '<div class="hotel-card" onclick="showHotelPage(' + hotel.hotel_id + ')">';
              hotelCard += '<img src="' + imageURL + '" alt="Hotel Image">';
              hotelCard += '<div class="hotel-info">';
                hotelCard += '<h3>' + hotelName + '</h3>';
                hotelCard += '<p>' + description + '</p>';
                hotelCard += '<p>PRICE: ' + price + ' EUR</p>';
                hotelCard += '<span class="location">' + location + '</span>';
              hotelCard += '</div>';
            hotelCard += '</div>';

            $('#hotels-list').append(hotelCard);
          }
        } else {
          $('#hotels-list').append('<div class="no-hotels-found">No hotels found</div>');
        }
      }
    });
  });
});
function showHotelPage(hotelId) {
    
   window.location.href = 'hotel.php?hotelId=' + hotelId;
}

    $(function() {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function(start, end, label) {
        //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
    });
    </script>

</body>

</html>