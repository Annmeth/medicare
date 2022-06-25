<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              List of Stores
            </h3>
            <nav aria-label="breadcrumb">
  
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modal">
                        <h5><b>+ New Store </b></h5>
                        
                    </a>
                
                
                <!-- Add form -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    
            <form action="routes.php" method="POST">
               <div class="modal-body">
               <h4><b>CREATE NEW STORE</b></h4>
                   <div class="form-group">
                      <label for="">Store ID </label>
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   </div>

                   <div class="form-group">
                      <label for=""> Store Name </label>
                     
                      <input type="text" name="via" class="form-control" placeholder="">
                   <div class="form-group">
                      <label for=""> Storekeeper Name</label>
                      <select name="destination" id="destination" class="form-control">
                          <option value="TABORA"> Ana Samson </option>
                          <option value="SHINYANGA"> Lenny James </option>
                          <option value="MARA"> kelvin Torrison</option>
                      </select>

                   </div>

                   
                 


                                <button type="send" class="btn btn-primary" name="send">Save</button>        
         

                 </form>
                 </div>
                 </div>
              </div>
     </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">List of Stores</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                        <tr>
                            <th>Store ID</th>
                            <th>Store Name</th>
                            <th>Storekeeper Name</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>ST100</td>
                            <td>Eqipment Store A</td>
                            <td>lenny John</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>ST200</td>
                            <td>Supplies Store B</td>
                            <td> Anna James</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <td>ST300</td>
                            <td>Supplies Store C</td>
                            <td> Anna James</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <td>ST400</td>
                            <td>Supplies Store </td>
                            <td> Anna James</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.urbanui.com/" target="_blank">vametech</a>. All rights reserved.</span>
 
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div> 






<?php
include 'includes/footer.php';
include 'includes/scripts.php';

?>