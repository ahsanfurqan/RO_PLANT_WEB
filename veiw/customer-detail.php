<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                 
                                </nav>
                                <h3>Customer Details</h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    
                                    <form id='cust_details'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Customer Name</label>
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Custumer ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                        <h3></h3>

                                        <table class="table" id="makeEditable">
    
    <tbody>
     
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Customer ID</th>
        <th>Address </th>
        <th>Phone Number</th>
        <th>Rate</th>
      </tr>
    </thead>
    <tbody id='table_data'>
           
      <!-- <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> -->
      
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
                    $('#cust_details').submit(function(event){
                            event.preventDefault();
                            var name=$('#name').val();
                            
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/search/client/"+name,
                                // data:formdata,
                                type:'GET',
                                success: function(result){
                                    if(result[0].name){
                                      for(var i=0;i<result.length; i++){
                                      var html='<tr>';
                                      html+='<td>'+result[i].name+'</td>';
                                      html+='<td>'+result[i].id+'</td>';
                                      html+='<td>'+result[i].address+'</td>';
                                      html+='<td>'+result[i].phone_number+'</td>';
                                      html+='<td>'+result[i].price+'</td></tr>';
                                    //   html.SetEditable();
                                    // alert(result[i].name);
                                      $('#table_data').append(html);
                                      }
                                    //   $('#num1').SetEditable();
                                      
                                      // $('#com_details')[0].reset();
                                    }
                                },
                                error:function(result){
                                    console.log(result)
                                }
                            });
                        })
                        </script>