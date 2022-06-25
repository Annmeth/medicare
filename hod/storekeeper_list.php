<?php
include 'includes/header.php';
include 'includes/navbar.php';

?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              List of Storekeepers
            </h3>
            <nav aria-label="breadcrumb">
  
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Modal">
                        <h5><b>+ New StoreKeeper </b></h5>
                        
                    </a>
                
                
                <!-- Add form -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    
            <form action="routes.php" method="POST">
               <div class="modal-body">
               <h4><b>CREATE NEW STOREKEEPER</b></h4>
                   <div class="form-group">
                      <label for="">StoreKeeper ID </label>
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   </div>

                   <div class="form-group">
                      <label for=""> StoreKeeper Name </label>
                     
                      <input type="text" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Store Name</label>
                      <select name="destination" id="destination" class="form-control">
                          <option value="text"> Equipment Store A </option>
                          <option value="text"> supplies Store B </option>
                          <option value="text"> Equipment Store C</option>
                      </select>

                   </div>
                   <div class="form-group">
                      <label for=""> Email Address </label>
                     
                      <input type="varchar" name="via" class="form-control" placeholder="">
                   </div>
                   <div class="form-group">
                      <label for=""> Contact</label>
                     
                      <input type="Number" name="via" class="form-control" placeholder="">
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
              <h4 class="card-title">List of Storekeepes</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                        <tr>
                            <th>Storekeeper ID</th>
                            <th>Storekeeper Name</th>
                            <th>Store Name</th>
                            <th>Email Address</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>ST100</td>
                            <td>lenny John</td>
                            <td>Eqipment Store A</td>
                            <td>lenny@gmail.com</td>
                            <td>+255678924350</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>ST200</td>
                            <td> Anna James</td>
                            <td>Supplies Store B</td>
                            <td> AJames@gmail.com</td>
                            <td> +255754967201</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <td>ST300</td>
                            <td>lenny John</td>
                            <td>Eqipment Store A</td>
                            <td>lenny@gmail.com</td>
                            <td>+255678924350</td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                        <td>ST400</td>
                            <td> Anna James</td>
                            <td>Supplies Store B</td>
                            <td> AJames@gmail.com</td>
                            <td> +255754967201</td>
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