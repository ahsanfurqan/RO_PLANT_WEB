<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3>Company Details</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                   
                                    
                                    <form id='com_details' class='com_details'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text"  id="name" onkeyup=filter(this.id) class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Company ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                        
                                        

                                        </div>
                                        
        
      
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
                                <h3> Details</h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                <nav aria-label="breadcrumb">
                                 
                                </nav>
                                <table class="table" id="myTable" style='width:100%'>

<!-- <tbody> -->

<thead>
<tr>
<th>Company Name</th>
<th>Company ID</th>
<th>Phone Number </th>
<th>Total Bottles</th>
<th>Edit</th>
</tr>
</thead>
<tbody id='table_data'>



</tbody>
</table>   
</div>
</div>
</div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
      <div class="modal-content"id='model-edit'>
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" >Company</h4>
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
                                                <label for="inputAddress"> Phone Number </label>
                                                <input type="text"  id="inputphone" class="form-control"  placeholder="03**-*******" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Total Bottle</label>
                                                <input type="number"  id="inputT-bottles" class="form-control"  placeholder=""require>
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
          <button type="button" class="btn btn-info" id='save' >Update</button>
        </div>
  
      </div>
    </div>
  </div>    

<?php include '../include/footer.php'?>

                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="jquery.editable.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" 
        integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" 
        crossorigin="anonymous"></script> -->

                    <script>
                        
                        $.ajax({
                                            url:'http://192.168.18.43:8000/api/company',
                                            type:'GET',  
                                            success:function(data){
                                                if(data[0].name){
                                                for(var i=0;i<data.length; i++){
                                                var html='<tr id="'+data[i].company_id+'">';
                                                html+='<td data-target="name">'+data[i].name+'</td>';
                                                html+='<td >'+data[i].company_id+'</td>';
                                                html+='<td data-target="phone">'+data[i].phone_number+'</td>';
                                                html+='<td data-target="bottle">'+data[i].total_bottles+'</td>';
                                                html+='<td > <i style="padding-right:20px" class="fa fa-trash fa-2x" id="'+data[i].company_id+'" onClick= passData(this,this.id)></i> <i class="fa fa-pencil-square-o fa-2x" id="'+data[i].company_id+'"onClick=data(this.id)></i></td></tr>';
                                                
                                                // alert(data[i].filled);
                                            //   html+='<td>'+data[i].price+'</td></tr>';
                                             $('#table_data').append(html);
                                            }
                                     }
                                    },
                                     
                                    })

                    
                        function passData(btn,company_id){
                    //  var name=document.getElementbyid(bill_id);
                    
                    // alert(company_id);
                    $.ajax({
                       url:'http://192.168.18.43:8000/api/delete/company/'+company_id,
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


                     });
                        }
                //         $(document).ready(function(){
                //     $(document).on('click','i[data-role=update]',function(){
                //       var id=$(this).data('id');
                //       var name=$('#'+id).children('td[data-target=name]').text();
                //       var phone_number=$('#'+id).children('td[data-target=phone]').text();
                //       var total_bottles=$('#'+id).children('td[data-target=bottle]').text();
                //       alert(id);
                //       $('#inputname').val(name); 
                //       $('#inputphone').val(phone_number); 
                //       $('#inputT-bottles').val(total_bottles); 
                //       $('#myModal').modal('toggle');
                //     })
                //    })
                   function data(id1) {
                    var id=id1;
                      var name=$('#'+id).children('td[data-target=name]').text();
                      var phone_number=$('#'+id).children('td[data-target=phone]').text();
                      var total_bottles=$('#'+id).children('td[data-target=bottle]').text();
                    //   alert(id);
                      $('#inputname').val(name); 
                      $('#inputphone').val(phone_number); 
                      $('#inputT-bottles').val(total_bottles); 
                      $('#userId').val(id); 
                      $('#myModal').modal('toggle');
                   }
                   $('#save').click(function(){
                     var id=$('#userId').val();
                     var formdata={
                       "name":$('#inputname').val(),
                       "phone_number":$('#inputphone').val(),
                      "total_bottles":$('#inputT-bottles').val(),
                     }
                    //  alert(id);
                     $.ajax({
                       url:'http://192.168.18.43:8000/api/update/company/'+id,
                       type:'POST',
                      data:formdata,
                      success:function(data){
                      $('#'+id).children('td[data-target=name]').text(formdata.name);
                      $('#'+id).children('td[data-target=phone]').text(formdata.phone_number);
                      $('#'+id).children('td[data-target=bottle]').text(formdata.total_bottles);
                      $('#myModal').modal('toggle');
                        swal.fire({
                        text:data.status_message,
                        icon:'success',
                        showConfirmButton:false,
                        timer:1500
                      });
                      },
                      error: function (error) {
                              swal.fire({
                              text:"Data is not valid  ",
                              icon: "warning",
                              button: "Ok",
                              }); 
                              console.log(error);
                              }
                     })
                   })
                   </script> 
                     <!-- // function updateData(){   

                            // }
                                    

                    //         function updataData(btn,company_id){
                    //             var row = btn.parentNode.parentNode;
                    //             row.parentNode.removeClass(row);
                           
                        
                    // //  document.getElementById("#table_data").deleteRow(0);

                    //     $.ajax({
                    //         url:'http://192.168.18.43:8000/api/delete/company/',
                    //         type:'POST',
                    //         success:function(result){
                    //             swal({
                    //                 text:result.status_message ,
                    //                 icon: "success",
                    //                 button: "Ok",
                    //                 }); 
                    //                 console.log(result);
                    //         },
                    //     });
                    // } -->
                    

                    
                   