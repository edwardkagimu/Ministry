<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ministry of Gender, labour and Social Development</title>
    <meta name="twitter:" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">-->
</head>
  <body class = "body">
    <div class="bg-white text-center gender_logo fixed">
        <img src="./images/1140.png" alt="" width = "80%">
    </div>
    <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed">
    <!--offcanvas trigger-->
  <button class="navbar-toggler me-2"  id = "offcanvas" type="button" data-bs-toggle="offcanvas"  data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
  <span class="navbar-toggler-icon">
  </span>
  </button>
  <!--offcanvas trigger-->
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#" id = "header">Storage Management</a>
    <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto">
  <div class="input-group my-2 my-lg-3">
  <input type="text" class="form-control" placeholder="Search for Equipments" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
  </form>

  <ul class="navbar-nav mb-2 mb-lg-0 mx-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--navbar-->

    <!--offcanvas-->

<div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white h-100" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
  <!--<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
    <button type="button" class="btn btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>-->
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="close">&times;</button>
    <div class="offcanvas-body p-2">
      <nav class = "navbar-dark">
        <ul class = "navbar-nav">
          <li>
              <div class="text-muted fw-bold text-uppercase px-3 my-2 fs-6">
                CORE
              </div>
          </li>

          <li class = "fs-5">
             <a href="#" class = "nav-link px-3 active">
                 <span class = "me-2">
                   <i class="fa fa-tachometer text-info" aria-hidden="true"></i>
                 </span>
                 <span>
                     Dashboard
                 </span>
             </a>
          </li>

          <li class = "my-4">
              <hr class = "dropdown-divider">
          </li>

          <li>
              <div class="text-muted fw-bold text-uppercase px-3 my-2 fs-6">
                Storage
              </div>
          </li>

          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class = "me-2"><i class="fa fa-database" aria-hidden="true"></i></span>
            <span>Enter Data</span>
            <span class = "right-icon ms-5">
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
               </a>

               <div class="collapse" id="collapseExample">
                <div>
                  <ul class = "navbar-nav ps-3">
                    <!--Desktop-->
                    <li>
                    <?php
                       include('./assets/process.php');
                     ?>
                      <span class = "nav-link px-3 item" data-bs-toggle = "modal" data-bs-target = "#desktop">
                        <span class = "me-2"><i class="fa fa-desktop text-primary" aria-hidden="true"></i></span>
                        <span>Desktop</span>
                      </span>

                      <div class="modal fade text-dark col-xs-6" tabindex = "-1" id = "desktop" aria-labelledby = "desktopLabel" aria-hidden = "true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Enter Desktop</h5>
                              <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="">
                                  <form action="dashboard.php" method = "POST">
                               <div class="mb-3 mt-3">
                              <label for="serial" class="form-label fw-bold">Serial No:</label>
                             <input type="text" class="form-control" id="serial" placeholder="Enter Serial no" name="serial_no" required>
                           </div>
                       <div class="mb-3">
                       <label for="egn" class="form-label fw-bold">Engravement Key:</label>
                      <input type="text" class="form-control" id="egn" placeholder="Enter Engravement no" name="engrave_no" required>
                     </div>

                 <div class="mb-3 input-group">
                <div class="col me-2">
                  <input type="text" class="form-control" id="brand" placeholder="Enter Brand" name="brand" required>
                  <label for="brand" class="form-label me-1 fw-bold">Brand:</label>
                </div>

                <div class="col ms-2">
                  <input type="text" name="model" placeholder = "Enter Model" id = "model" class = "form-control" required>
                  <label for="model" class = "ms-1 fw-bold">Model:</label>
                </div>
               </div>

                 <div class="mb-3 input-group">
                <div class="col me-2">
                  <input type="text" class="form-control" id="ram" placeholder="Ram size" name="ram" required>
                  <label for="ram" class="form-label me-1 fw-bold">Ram:</label>
                </div>

                <div class="col ms-2">
                  <input type="text" name="storage" placeholder = "Enter Storage" id = "storage" class = "form-control" required>
                  <label for="storage" class = "ms-1 fw-bold">Storage:</label>
                </div>
               </div>

               <div class="mb-3">
               <label for="funder" class="form-label fw-bold">Funder:</label>
              <input type="text" class="form-control" id="egn" placeholder="Enter Funder" name="funder" required>
             </div>

             <div class="mb-3">
             <label for="egn" class="form-label fw-bold">Financial year:</label>
            <input type="text" class="form-control" id="egn" placeholder="Enter Financial year" name="financial" required>
           </div>

           <div class="d-grid gap-2">
             <input type="submit" name="submit1" value="Submit" class = "btn btn-primary py-2">
           </div>

            </form>
            </div>
            </div>
            </div>
            </div>

            </div>
              </li>

                      <!--Laptop-->
                      <li>
                        <span class = "nav-link px-3 item" data-bs-toggle = "modal" data-bs-target = "#laptop">
                          <span class = "me-2"><i class="fa fa-laptop text-success" aria-hidden="true"></i></span>
                          <span>Laptop</span>
                        </span>

                        <div class="modal fade text-dark" tabindex = "-1" id = "laptop" aria-labelledby = "laptopLabel" aria-hidden = "true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter Laptop</h5>
                                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                  <div class="">
                                    <form action="/action_page.php">
                                 <div class="mb-3 mt-3">
                                <label for="serial" class="form-label fw-bold">Serial No:</label>
                               <input type="text" class="form-control" id="serial" placeholder="Enter Serial no" name="serial_no" required>
                             </div>
                         <div class="mb-3">
                         <label for="egn" class="form-label fw-bold">Engravement Key:</label>
                        <input type="text" class="form-control" id="egn" placeholder="Enter Engravement no" name="engrave_no" required>
                       </div>

                   <div class="mb-3 input-group">
                  <div class="col me-2">
                    <input type="text" class="form-control" id="brand" placeholder="Enter Brand" name="brand" required>
                    <label for="brand" class="form-label me-1 fw-bold">Brand:</label>
                  </div>

                  <div class="col ms-2">
                    <input type="text" name="model" placeholder = "Enter Model" id = "model" class = "form-control" required>
                    <label for="model" class = "ms-1 fw-bold">Model:</label>
                  </div>
                 </div>

                   <div class="mb-3 input-group">
                  <div class="col me-2">
                    <input type="text" class="form-control" id="brand" placeholder="Ram size" name="brand" required>
                    <label for="ram" class="form-label me-1 fw-bold">Ram:</label>
                  </div>

                  <div class="col ms-2">
                    <input type="text" name="storage" placeholder = "Enter Storage" id = "storage" class = "form-control" required>
                    <label for="ram" class = "ms-1 fw-bold">Storage:</label>
                  </div>
                 </div>

                 <div class="mb-3">
                 <label for="funder" class="form-label fw-bold">Funder:</label>
                <input type="text" class="form-control" id="egn" placeholder="Enter Funder" name="funder" required>
               </div>

               <div class="mb-3">
               <label for="egn" class="form-label fw-bold">Financial year:</label>
              <input type="text" class="form-control" id="egn" placeholder="Enter Financial year" name="financial" required>
             </div>

             <div class="d-grid gap-2">
               <input type="submit" name="submit" value="Submit" class = "btn btn-primary py-2">
             </div>

              </form>
              </div>
              </div>
              </div>
              </div>

              </div>
                      </li>

                      <!--Printer-->
                      <li>
                        <span class = "nav-link px-3 item" data-bs-toggle = "modal" data-bs-target = "#printer">
                          <span class = "me-2"><i class="fa fa-print text-warning" aria-hidden="true"></i></span>
                          <span>Printer</span>
                        </span>

                        <div class="modal fade text-dark" tabindex = "-1" id = "printer" aria-labelledby = "printerLabel" aria-hidden = "true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter Printer</h5>
                                <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                  <div class="">
                                  <form action="/action_page.php">
                                 <div class="mb-3 mt-3">
                                <label for="serial_no" class="form-label fw-bold">Serial No:</label>
                               <input type="text" class="form-control" id="printer_no" placeholder="Enter serial no" name="serial_no" required>
                             </div>

                             <div class="mb-3 mt-3">
                            <label for="serial" class="form-label fw-bold">Printer No:</label>
                           <input type="text" class="form-control" id="printer_no" placeholder="Enter Printer no" name="printer_no" required>
                         </div>

                         <div class="mb-3">
                         <label for="egn" class="form-label fw-bold">Engravement Key:</label>
                        <input type="text" class="form-control" id="egn" placeholder="Enter Engravement no" name="engrave_no" required>
                       </div>

                   <div class="mb-3 input-group">
                  <div class="col me-2">
                    <input type="text" class="form-control" id="brand" placeholder="Enter Brand" name="brand" required>
                    <label for="brand" class="form-label me-1 fw-bold">Brand:</label>
                  </div>

                  <div class="col ms-2">
                    <input type="text" name="model" placeholder = "Enter Model" id = "model" class = "form-control" required>
                    <label for="model" class = "ms-1 fw-bold">Model:</label>
                  </div>
                 </div>

                   <div class="mb-3 input-group">
                  <div class="col me-2">
                    <input type="text" class="form-control" id="purpose" placeholder="Enter Purpose" name="brand" required>
                    <label for="purpose" class="form-label me-1 fw-bold">Purpose:</label>
                  </div>

                  <div class="col ms-2">
                    <input type="text" name="storage" placeholder = "Enter Printer color" id = "printer_color" class = "form-control" required>
                    <label for="printer_color" class = "ms-1 fw-bold">Printer Color:</label>
                  </div>
                 </div>

                 <div class="mb-3">
                 <label for="funder" class="form-label fw-bold">Funder:</label>
                <input type="text" class="form-control" id="egn" placeholder="Enter Funder" name="funder" required>
               </div>

               <div class="mb-3">
               <label for="egn" class="form-label fw-bold">Financial year:</label>
              <input type="text" class="form-control" id="egn" placeholder="Enter Financial year" name="financial" required>
             </div>

             <div class="d-grid gap-2">
               <input type="submit" name="submit" value="Submit" class = "btn btn-success py-2">
             </div>

              </form>
              </div>
              </div>
              </div>
              </div>

              </div>

                      </li>
                      <!--Stationery-->
                      <li>
                      <span class = "nav-link px-3 item" data-bs-toggle = "modal" data-bs-target = "#stationery">
                      <span class = "me-2"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <span>Stationery</span>
                  </span>

                <div class="modal fade text-dark" id="stationery" tabindex="-1" aria-labelledby="stationeryLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                 <div class="modal-header">
                <h5 class="modal-title" id="stationeryLabel">Enter Stationery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <div class="modal-body">
                    <form class="" action="process.php" method="post">
                      <div class="mb-3 mt-3">
                     <label for="serial_no" class="form-label fw-bold">Item:</label>
                    <input type="text" class="form-control" id="printer_no" placeholder="Enter Item" name="items" required>
                  </div>

                  <div class="mb-3 mt-3">
                 <label for="quantity" class="form-label fw-bold">Quantity:</label>
                <input type="number" class="form-control" id="quantity" placeholder="Select Quantity" name="quantity" required>
              </div>

              <div class="mb-3 mt-3">
             <label for="description" class="form-label fw-bold">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description" required>
          </div>

          <div class="d-grid gap-2">
            <input type="submit" name="submit" value="Submit" class = "btn btn-success py-2">
          </div>
              </form>
                 </div>

               </div>
              </div>
                </div>
                      </li>

                     <!--General Items-->
                     <li>
                       <span class = "nav-link px-3 item" data-bs-toggle = "modal" data-bs-target = "#general">
                         <span class = "me-2"><i class="fa fa-briefcase text-danger" aria-hidden="true"></i></span>
                         <span>General Items</span>
                       </span>

                       <div class="modal fade text-dark" id="general" tabindex="-1" aria-labelledby="stationeryLabel" aria-hidden="true">
                       <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                       <h5 class="modal-title" id="stationeryLabel">Enter General Items</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                        <div class="modal-body">
                           <form class="" action="process.php" method="post">
                             <div class="mb-3 mt-3">
                            <label for="item" class="form-label fw-bold">Item:</label>
                           <input type="text" class="form-control" id="item" placeholder="Enter Item" name="items" required>
                         </div>

                         <div class="mb-3 mt-3">
                        <label for="size" class="form-label fw-bold">Size:</label>
                       <input type="number" class="form-control" id="size" placeholder="Select size" name="size" required>
                     </div>

                     <div class="mb-3 mt-3">
                    <label for="description" class="form-label fw-bold">Description:</label>
                   <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description" required>
                 </div>

                 <div class="d-grid gap-2">
                   <input type="submit" name="submit" value="Submit" class = "btn btn-success py-2">
                 </div>
                     </form>
                        </div>

                      </div>
                     </div>
                       </div>
                     </li>

                  </ul>
                </div>
              </div>
          </li>

          <li class = "my-4">
              <hr class = "dropdown-divider">
          </li>

          <li>
              <div class="text-muted fw-bold text-uppercase px-3 my-2 fs-6">
                Browse Storage
              </div>
          </li>

        <li>
        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
        <span class = "me-2"><i class="fa fa-eye" aria-hidden="true"></i></span>
        <span>View Data</span>
        <span class = "right-icon ms-5">
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </span>
           </a>

           <div class="collapse" id="collapseExample2">
            <div>
              <ul class = "navbar-nav ps-3">
                <!--Desktop-->
                <li>
                  <span class = "nav-link px-3 item" id = "desktop1">
                    <span class = "me-2"><i class="fa fa-desktop text-primary" aria-hidden="true"></i></span>
                    <span>Desktop</span>
                  </span>
                </li>
                  <!--Laptotop-->
                  <li>
                    <a href="#" class = "nav-link px-3">
                      <span class = "me-2"><i class="fa fa-laptop text-success" aria-hidden="true"></i></span>
                      <span>Laptop</span>
                    </a>
                  </li>

                  <!--Printer-->
                  <li>
                    <a href="#" class = "nav-link px-3">
                      <span class = "me-2"><i class="fa fa-print text-warning" aria-hidden="true"></i></span>
                      <span>Printer</span>
                    </a>
                  </li>

                  <!--Stationery-->
                  <li>
                    <a href="#" class = "nav-link px-3">
                      <span class = "me-2"><i class="fa fa-book" aria-hidden="true"></i></span>
                      <span>Stationery</span>
                    </a>
                  </li>

                 <!--General Items-->
                 <li>
                   <a href="#" class = "nav-link px-3">
                     <span class = "me-2"><i class="fa fa-briefcase text-danger" aria-hidden="true"></i></span>
                     <span>General Items</span>
                   </a>
                 </li>
              </ul>
            </div>
          </div>
          </li>

            <!--Dispatch divider--->
          <li class = "my-4">
              <hr class = "dropdown-divider">
          </li>

          <li>
              <div class="text-muted fw-bold text-uppercase px-3 my-2 fs-6">
                View Dispatched
              </div>
          </li>

          <li>
            <a href="#" class = "nav-link px-3">
              <span class = "me-2"><i class="fa fa-outdent" aria-hidden="true"></i></span>
              <span>Dispatched</span>
            </a>
          </li>

          <li>
            <a href="#" class = "nav-link px-3">
              <span class = "me-2"><i class="fa fa-tasks" aria-hidden="true" style = "color: purple;"></i></span>
              <span>Report</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    </div>


    <!--offcanvas-->

    <!--Main Tag-->
    <main class = "mt-3 pt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 fw-bold fs-4">
            Dashboard
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card text-white bg-primary h-100">

          <div class="card-body">

           <div class="display-2 text-center">
                40
           </div>
           <div class="card-header text-center lead">Desktop</div>
          </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card text-white bg-warning h-100">

        <div class="card-body">

         <div class="display-2 text-center">
              53
         </div>
         <div class="card-header text-center lead">Laptop</div>
        </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card text-white bg-success h-100">

      <div class="card-body">

       <div class="display-2 text-center">
            60
       </div>
       <div class="card-header text-center lead">Printers</div>
      </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card text-white bg-danger h-100">

    <div class="card-body">

     <div class="display-2 text-center">
          23
     </div>
     <div class="card-header text-center lead">Stationery</div>
    </div>
    </div>
  </div>
  </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header" id = "data_head">Charts</div>
            <div class="card-body">
              <div class = "table-responsive text-dark" id="user_data" width="" height="">
                 Hello
            </div>
            </div>
          </div>

        </div>
      </div>
    </main>


     <!--footer-->
    <footer class="bg-dark text-center text-white fixed-bottom">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-twitter-square" aria-hidden="true"></i>
        </a>

        <!-- Google -->

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-instagram" aria-hidden="true"></i>
        </a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-linkedin-square" aria-hidden="true"></i>
        </a>

        <!-- Github -->

      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mglsd.go.ug/">Ministry official Website</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- End of .container -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./css/ministry.js">

  </script>
   </body>
</html>
