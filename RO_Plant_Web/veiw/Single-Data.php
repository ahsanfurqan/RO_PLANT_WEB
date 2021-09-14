                                   
<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class=" ">
                                <div class="card-body">
                                    <div class="dashboard-info row">
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="col-md-4">
                            
                                <div class="card-body">
                                    <div class="">
                                        
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title"> Total Bottles</h5>
                                    <h2 class="float-right" >45</h2>
                                    
                                    <div class="" style="height: 10px;">
                                        <div class=""  style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                    

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Bill/Month</h5>
                                    <h2 class="float-right" >4</h2>
                                    
                                    <div class="" style="height: 40px;">
                                        <div class=""  style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                         
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Bill Last Month</h5>
                                    <h2 class="float-right" >14</h2>
                                    
                                    <div class="" style="height: 40px;">
                                        <div class=""  style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                     
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id='ahsan'>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bottle Delivery Detail</h5>
                                    <div class="table-responsive">
                                        <table class="table"id='mytable'>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Recieved</th>
                                                    <th scope="col">Deliver</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id='table_data' onload=asyncCall()>
                                           
                                          
                                                <!-- <tr>
                                                    <td>01</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-success"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-warning"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-info"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-info"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-secondary"></span></td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Payment Detail</h5>
                                    <div class="table-responsive">
                                        <table class="table"id='mytable'>
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Payment</th>
                                                    <th scope="col">Due Amount</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id='table_data' onload=asyncCall()>
                                           
                                          
                                                <!-- <tr>
                                                    <td>01</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-success"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-warning"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-info"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-info"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span class="badge badge-secondary"></span></td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
  
                   
            <?php include '../include/footer.php'?> 