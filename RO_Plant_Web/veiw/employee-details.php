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
                    <label for="input-date">Date of Joining</label>
                    <input type="date" class="form-control" id="input-date">
                </div>
                
            <!-- </div> -->
                

            </div>
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label for="input-salary">Salary</label>
                    <input type="number" class="form-control" id="input-salary">
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" id="userId"  placeholder="" require>
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
          <button type="button" class="btn btn-info" onclick="updateData()">Update</button>
        </div>
  
      </div>
    </div>
  </div>    
<?php include '../include/footer.php'?>
                  
<script>
                        
                        $.ajax({
                            url:"http://192.168.0.183:8000/api/employee",
                               type:'GET',
                               success:function(data){
                                 if(data[0].employee_id){
                                    for(var i=0;i<data.length; i++){
                                        var html='<tr id="'+data[i].employee_id+'">';
                                        html+='<td data-target="name">'+data[i].name+'</td>';
                                        html+='<td data-target="address">'+data[i].address+'</td>';
                                        html+='<td data-target="phone">'+data[i].phone_number+'</td>';
                                        html+='<td data-target="doj">'+data[i].date_of_joining+'</td>';
                                        html+='<td data-target="salary">'+data[i].salary+'</td>';
                                        html+='<td > <i style="padding-right:20px" class="fa fa-trash fa-2x" id="'+data[i].employee_id+'" onClick= "deleteData(this,this.id)"></i> <i class="fa fa-pencil-square-o fa-2x" id="'+data[i].employee_id+'"onClick="passData(this.id)"></i></td></tr>';
                                      $('#table_data').append(html);
                                            }
                                     }
                                    }
                                     
                                    })

                    
                     function deleteData(btn,employee_id){
                    // alert(employee_id);
                    $.ajax({
                        url:'http://192.168.0.183:8000/api/delete/employee/'+employee_id,
                       type:'DELETE',
                       success:function(result){
                        swal.fire({
                        text:result.status_message,
                        icon:'success',
                        showConfirmButton:false,
                        timer:1500
                      });
                      var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    },
                      error: function (error) {
                              swal.fire({
                              text:"Error in Delete",
                              icon: "error",
                              }); 
                              
                              }   
                     });
                        }
                        function passData(a){
                      var id=a;
                    //   alert(a);
                      var name=$('#'+id).children('td[data-target=name]').text();
                      var address=$('#'+id).children('td[data-target=address]').text();
                      var phone_number=$('#'+id).children('td[data-target=phone]').text();
                      var doj=$('#'+id).children('td[data-target=doj]').text();
                      var salary=$('#'+id).children('td[data-target=salary]').text();
                    //   alert(doj);
                      $('#inputname').val(name); 
                      $('#inputphone').val(phone_number); 
                      $('#inputaddress').val(address); 
                      $('#input-salary').val(salary); 
                      $('#input-date').val(doj); 
                      $('#userId').val(id); 
                      $('#myModal').modal('toggle');
                        }
                        function updateData(){
                            var id=$('#userId').val();
                            var formdata={
                                'name':$('#inputname').val(),
                                'phone_number':$('#inputphone').val(),
                                'address':$('#inputaddress').val(),
                                'salary': $('#input-salary').val(),
                                'date_of_joining':$('#input-date').val()
                            }
                            $.ajax({
                               url:'http://192.168.0.183:8000/api/update/employee/'+id,
                               type:'POST',
                               data:formdata,
                               success:function(data){
                                $('#'+id).children('td[data-target=name]').text(formdata.name);
                                $('#'+id).children('td[data-target=address]').text(formdata.address);
                                $('#'+id).children('td[data-target=phone]').text(formdata.phone_number);
                                $('#'+id).children('td[data-target=doj]').text(formdata.date_of_joining);
                                $('#'+id).children('td[data-target=salary]').text(formdata.salary);
                                   $('#myModal').modal('toggle');
                                   swal.fire({
                                       icon:'success',
                                       text:data.status_message,
                                       showConfirmButton:false,
                                        timer:1500
                                   });
                               },
                               error: function (error) {
                              swal.fire({
                                icon: "warning",
                                text:"Data is not valid",
                              
                              }); 
                              
                              } 
                            });
                        }
               
                   </script> 
                      
