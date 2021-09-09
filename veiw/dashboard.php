<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                    <script>
                                            async function asyncCall(){
                                            $.ajax({
                                            url='http://192.168.0.183:8000/api/display/order',
                                            type:'GET',  
                                            success:function(data){
                                            if(data[0].order_id){
                                            for(var i=0;i<4; i++){
                                            var html='<tr>';
                                            html+='<td>'+data[i].order_id+'</td>';
                                            html+='<td>'+data[i].client_id+'</td>';
                                            html+='<td>'+data[i].filled+'</td>';
                                            html+='<td>'+data[i].cost+'</td></tr>';
                                            alert(data[i].filled);
                                                // html+='<td>'+data[i].price+'</td></tr>';
                                               await $('#table_data').append(html);
                                            }
                                        }
                                    },
                                    error:function(data){
                                        console.log(data);
                                    } 
                                    })
                                }
                                                    </script>
<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <div class="dashboard-info row">
                                        
                                        <div class="info-image col-md-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="">
                                            <h5 class="card-title">Daily Visitors</h5>
                                            <canvas id="visitorsChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">New Customers</h5>
                                    <h2 class="float-right">45.6K</h2>
                                    <p>From last week</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Orders</h5>
                                    <h2 class="float-right">14.3K</h2>
                                    <p>Orders in waitlist</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Monthly Profit</h5>
                                    <h2 class="float-right">45.6$</h2>
                                    <p>For last 30 days</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id='ahsan'>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Last Transactions</h5>
                                    <div class="table-responsive">
                                        <table class="table"id='mytable'>
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Customer</th>
                                                    <th scope="col">bottles</th>
                                                    <th scope="col">Amount</th>
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
                                    <h5 class="card-title">Social Media</h5>
                                    <div class="social-media-list">
                                        <div class="social-media-item">
                                            <div class="social-icon twitter">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>RO Plant</p>
                                                
                                            </div>
                                        </div>
                                        <div class="social-media-item">
                                            <div class="social-icon google">
                                                <i class="fab fa-google-plus-g"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>RO Plant</p>
                                                
                                            </div>
                                        </div>
                                        <div class="social-media-item">
                                            <div class="social-icon facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>RO Plant</p>
                                               
                                            </div>
                                        </div>
                                        <div class="social-media-item">
                                            <div class="social-icon instagram">
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                            <div class="social-text">
                                                <p>RO Plant</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning m-b-lg" role="alert">
                                Data has been updated 23 min ago.
                            </div>
                        </div>
                    </div>
                   
            <?php include '..\include\footer.php'?> 
            