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
                                                <input type="text"  id="name" onkeyup=filter(this.id) class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Custumer ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                       
                                        

                                        </div>
                                        <h3></h3>

                                       
        
      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                 
                                </nav>
                                <h3>Details</h3>
                               
                            </div>
                        </div>
                    </div>
                   
                <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                <nav aria-label="breadcrumb">
                                 
                                </nav>
                    <table class="table" id="myTable">
    
    <tbody>
     
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Customer ID</th>
        <th>Address </th>
        <th>Phone Number</th>
        <th>Rate</th>
        <th>Edit</th>
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
  </div>
</div>
</div>
</div>
<button data-toggle="modal" data-target="#update">Summary</button>
<div class="modal fade" id="update">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content"id='model-edit'>
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" >Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Name</label>
                                                <input type="text" class="form-control" id="inputname"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress"> Address </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" require>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Phone Number</label>
                                                <input type="text" class="form-control" id="inputphone"  placeholder="03**-*******">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputprice"> Price/Rate </label>
                                                <input type="float" class="form-control" id="inputprice">
                                            </div>
                                        </div>
                                        <
                                       
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info"id='btn-sum1' onclick="copyfunction('#sum1',this.id)">Update</button>
        </div>
  
      </div>
    </div>
  </div>
<?php include '../include/footer.php'?>
                   
                    <script>
                      $.ajax({
                        url:"http://192.168.18.43:8000/api/client",
                        type:'GET',
                        success:function(data){
                          if(data[0].id){
                            for(var i=0; i<data.length; i++){
                              var html='<tr>';
                              html+='<td>'+data[i].name+'</td>';
                              html+='<td>'+data[i].id+'</td>';
                              html+='<td>'+data[i].address+'</td>';
                              html+='<td>'+data[i].phone_number+'</td>';
                              html+='<td>'+data[i].price+'</td>';
                              html+='<td> <i class="fa fa-trash"id="'+data[i].id+'" onClick= passData(this,this.id)></i></td>';
                              html+='<td><i class="fa fa-pencil-square-o"id="'+data[i].id+'" data-toggle="modal" data-target="#update"></i></td> </tr>';
                              $('#table_data').append(html);
                            }
                          }
                        },
                      });


                    function updateData(btn,id){
                      // $(btn).parents('tr').attr()
                    }
                   
                    function passData(btn,id){
                    //  var name=document.getElementbyid(bill_id);
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    // alert(company_id);
                    $.ajax({
                       url:'http://192.168.18.43:8000/api/delete/client/'+id,
                       type:'DELETE',
                       success:function(result){
                                    swal({
                                    text:result.status_message ,
                                    icon: "success",
                                    button: "Ok",
                                    }); 
                                    console.log(result);
                                }, 


                     });
                    //  document.getElementById("#table_data").deleteRow(0);

                   }   

                        </script>


