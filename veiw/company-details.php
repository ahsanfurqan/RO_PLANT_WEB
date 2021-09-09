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
                                    
                                    <form id='com_details' class='com_details'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Company ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
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
        <th>Phone Number </th>
        <th>Total Bottles</th>
      </tr>
    </thead>
    <tbody id='table_data'>
           
      
     
    </tbody>
  </table>
        
      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '..\include\footer.php'?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                       $('#com_details').submit(function(event){
                            event.preventDefault();
                            var name=$('#name').val();
                            // $('#makeEditable').SetEditable();
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/search/company/"+name,
                                // data:formdata,
                                type:'GET',
                                success: function(result){
                                    if(result.name){
                                      
                                      var html='<tr>';
                                      html+='<td>'+result.company_id+'</td>';
                                      html+='<td>'+result.name+'</td>';
                                      html+='<td>'+result.phone_number+'</td>';
                                      html+='<td>'+result.total_bottles+'</td></tr>';
                                    //   html.SetEditeable();
                                      
                                      $('#table_data').prepend(html);
                                      
                                      alert(result.name);
                                      // $('#com_details')[0].reset();
                                    }
                                },
                                error:function(result){
                                    console.log(result)
                                }
                            });
                        })

                    </script>