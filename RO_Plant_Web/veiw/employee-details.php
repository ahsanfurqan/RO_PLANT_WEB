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
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Employee ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

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
                        

<table class="table" id="makeEditable">

<!-- <tbody> -->

<thead>
<tr>
<th>Employee Name</th>
<th>Address</th>
<th>Employee Phone Number</th>
<th>Date Of Joining </th>
<th>Salary</th>
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
<?php include '../include/footer.php'?>
                  
                    <script>

                           $.ajax({
                               url:"http://192.168.0.183:8000/api/employee",
                               type:'GET',
                               success:(function(data){
                                 if(data[0].employee_id){
                                    for(var i=0;i<data.length; i++){
                                      var html='<tr>';
                                      html+='<td>'+data[i].name+'</td>';
                                      html+='<td>'+data[i].address+'</td>';
                                      html+='<td>'+data[i].phone_number+'</td>';
                                      html+='<td>'+data[i].date_of_joining+'</td>';
                                      html+='<td>'+data[i].salary+'</td></tr>';
                                      
                                   
                                      $('#table_data').append(html);
                                 }  
                                 } 
                               })
                               

                           })

                    $('#emp_details').submit(function(event){
                            event.preventDefault();
                            var name=$('#name').val();
                            if(name==''){
                                swal({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    button: "Ok",
                                    });
                            }
                            else{
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/search/employee/"+name,
                                
                                type:'GET',
                                success: function(result){
                                    if(result[0].name){
                                      for(var i=0;i<result.length; i++){
                                      var html='<tr>';
                                      html+='<td>'+result[i].name+'</td>';
                                      html+='<td>'+result[i].address+'</td>';
                                      html+='<td>'+result[i].phone_number+'</td>';
                                      html+='<td>'+result[i].date_of_joining+'</td>';
                                      html+='<td>'+result[i].salary+'</td></tr>';
                                      
                                   
                                      $('#table_data').replaceWith(html);
                                      }
                                  
                                    }
                                },
                                error:function(error){
                                    swal({
                                    text:"Data is not valid or a employee may be registered with this data ",
                                    icon: "error",
                                    button: "Ok",
                                    });
                                    console.log(result)
                                }
                            });
                            }
                        })
                        </script>
                      