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
                              html+='<td> <i class="fa fa-trash"id="'+data[i].id+'" onClick= passData(this,this.id)></i></td> </tr>';
                              $('#table_data').append(html);
                            }
                          }
                        },
                      });



                    // $('#cust_details').submit(function(event){
                    //         event.preventDefault();
                    //         var name=$('#name').val();
                    //         if(name==''){
                    //             swal({
                    //                 title: "Fields Empty",
                    //                 text: "Please Check the missing Values!!",
                    //                 icon: "warning",
                    //                 button: "Ok",
                    //                 });
                    //         }
                    //         else{
                    //         $.ajax({
                    //             url:"http://192.168.18.43:8000/api/search/client/"+name,
                    //             // data:formdata,
                    //             type:'GET',
                    //             success: function(result){
                    //                 if(result[0].name){
                    //                   for(var i=0;i<result.length; i++){
                    //                   var html='<tr>';
                    //                   html+='<td>'+result[i].name+'</td>';
                    //                   html+='<td>'+result[i].id+'</td>';
                    //                   html+='<td>'+result[i].address+'</td>';
                    //                   html+='<td>'+result[i].phone_number+'</td>';
                    //                   html+='<td>'+result[i].price+'</td></tr>';
                    //                 //   html.SetEditable();
                    //                 // alert(result[i].name);
                    //                   $('#table_data').replaceWith(html);
                    //                   }
                    //                 //   $('#num1').SetEditable();
                                      
                    //                   // $('#com_details')[0].reset();
                    //                 }
                    //             },
                    //             error:function(error){
                    //               swal({
                    //                 text:"Data is not valid or a customer may be registered with this data ",
                    //                 icon: "error",
                    //                 button: "Ok",
                    //                 });
                    //                 console.log(result)
                    //             }
                    //         });
                    //         }
                    //     })

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


