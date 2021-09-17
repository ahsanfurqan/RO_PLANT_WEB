<?php include '../include/header.php'?>
<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3>Employee Details</h3>
                            </div>
                        </div>
                    </div>
                    <div class="lime-body">
                <div class="container">
                    <div class="row">
                    <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    
                        <div class="col-md-12">
                            <div class="page-title">
                                    <form id='emp_details' >
                                       
                                        <div class="form-row">
                                            <div class="form-group col-md-6">

                                                <label for="name">Employee Name</label>
                                                <input type="text"  id="name" onkeyup=filter(this.id) class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Employee ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                       
                                        

                                        </div>
                                       
        
      
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3> Details</h3>
                            </div>
                        </div>
                    </div>
</div> 
                    <div class="row">
                    <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                        

<table class="table" id="myTable">

<!-- <tbody> -->

<thead>
<tr>
<th>Employee Name</th>
<th>Address</th>
<th>Employee Phone Number</th>
<th>Date Of Joining </th>
<th>Salary</th>
<th>Edit</th>
</tr>
</thead>
<tbody id='table_data'>
<!--            
<tr class="">
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

</tr>
<tr class="">
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

</tr> -->

</tbody>
</table>
                      
                    </div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content"id='model-edit'>
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" >Employee</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputname">Employee Name</label>
                    <input type="text" class="form-control" id="inputname"  placeholder="" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputphone">Employee Phone Number</label>
                    <input type="text" class="form-control" id="inputphone"  placeholder="03**-*******" require>
                </div>
               
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputaddress">Address</label>
                    <input type="text" class="form-control" id="inputaddress"  placeholder="" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Email</label>
                    <input type="Email" class="form-control" id="inputemail"  placeholder="" require>
                </div>
               
                

            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" require>
                   
                    <span>
                    <i class="fa fa-eye" id="eye" onclick="toggle()" ></i>
                    </span>
                </div>
            <div class="form-group col-md-6">
                    <label for="inputPassword5">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword5" placeholder="Confirm Password" require>
                    <span>
                    <i class="fa fa-eye" id="eye1" onclick="toggle1()" ></i>
                    </span>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="input-date">Date of Joining</label>
                    <input type="date" class="form-control" id="input-date">
                </div>
                <div class="form-group col-md-6">
                    <label for="input-salary">Salary</label>
                    <input type="number" class="form-control" id="input-salary">
                </div>
            </div>
        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                
                                                <input type="hidden" class="form-control" id="userId">
                                            </div>
                                        </div>
                                       
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info"id='save' onclick="updateData()">Update</button>
        </div>
  
      </div>
    </div>
  </div>    
<?php include '../include/footer.php'?>
                  
<script>
                        
                        $.ajax({
                            url:"http://192.168.18.43:8000/api/employee",
                               type:'GET',
                               success:function(data){
                                 if(data[0].employee_id){
                                    for(var i=0;i<data.length; i++){
                                      var html='<tr id="'+data[i].employee_id+'">';
                                      html+='<td data-target="name">'+data[i].name+'</td>';
                                      html+='<td>'+data[i].id+'</td>';
                                      html+='<td data-target="address>'+data[i].address+'</td>';
                                      html+='<td data-target="phone>'+data[i].phone_number+'</td>';
                                      html+='<td data-target="email>'+data[i].email+'</td>';
                                      html+='<td data-target="password>'+data[i].password+'</td>';
                                      html+='<td data-target="confirm>'+data[i].confirm_password+'</td>';
                                      html+='<td data-target="joining>'+data[i].date_of_joining+'</td>';
                                      html+='<td data-target="salary>'+data[i].salary+'</td>';
                                      html+='<td> <i class="fa fa-trash" id="'+data[i].employee_id+'" onClick= passData(this,this.id)></i></td>';
                                      html+='<td> <i class="fa fa-pencil-square-o" id="'+data[i].employee_id+'"data-role="update"onClick=data(this.id)></i></td> </tr>';
                                      $('#table_data').append(html);
                                            }
                                     }
                                    }
                                     
                                    })

                    
                        function passData(btn,employee_id){
                            // var name=document.getElementbyid(employee_id);
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    $.ajax({
                        url:'http://192.168.18.43:8000/api/delete/employee/'+employee_id,
                       type:'DELETE',
                       success:function(result){
                        swal.fire({
                        text:data.status_message,
                        icon:'success',
                        showConfirmButton:false,
                        timer:1500
                      });   
                                    console.log(result);
                                }, 


                     });
                        }
               
                   </script> 
                      
