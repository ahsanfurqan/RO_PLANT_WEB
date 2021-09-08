<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Forms</li>
                                  </ol>
                                </nav>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">COMPANY DETAILS</h5>
                                    
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Company ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div> 
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                        <h2>Details</h2>

                                        <table class="table" id="makeEditable">
    
    <tbody>
     
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Company ID</th>
        <th>Total Bottles </th>
      </tr>
    </thead>
    <tbody>
           
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
     
    </tbody>
  </table>
        
      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '..\include\footer.php'?>