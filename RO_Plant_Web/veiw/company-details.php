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
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <!-- <div class="form-group col-md-6">
                                                <label for="cust">Company ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div>  -->
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        

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
                                <table class="table" id="makeEditable" style='width:100%'>

<!-- <tbody> -->

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
                                            url:'http://192.168.0.183:8000/api/company',
                                            type:'GET',  
                                            success:function(data){
                                                if(data[0].name){
                                                for(var i=0;i<data.length; i++){
                                                var html='<tr>';
                                                html+='<td>'+data[i].name+'</td>';
                                                html+='<td>'+data[i].company_id+'</td>';
                                                html+='<td>'+data[i].phone_number+'</td>';
                                                html+='<td>'+data[i].total_bottles+'</td></tr>';
                                                // alert(data[i].filled);
                                            //   html+='<td>'+data[i].price+'</td></tr>';
                                             $('#table_data').append(html);
                                            }
                                     }
                                    },
                                    error:function(data){
                                        console.log(data);
                                    } 
                                    })
                       $('#com_details').submit(function(event){
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
                                url:"http://192.168.0.183:8000/api/search/company/"+name,
                                
                                type:'GET',
                                success: function(result){
                                    if(result.name){
                                      var html='<tr class="num1">';
                                      html+='<td>'+result.name+'</td>';
                                      html+='<td>'+result.company_id+'</td>';
                                      html+='<td>'+result.phone_number+'</td>';
                                      html+='<td>'+result.total_bottles+'</td></tr>';
                                   
                                      $('#table_data').replaceWith(html);
                                 
                                    }
                                },
                                error:function(error){
                                    swal({
                                    text:"Data is not valid or a company may be registered with this data ",
                                    icon: "error",
                                    button: "Ok",
                                    });
                                    console.log(result)
                                }
                            });
                       }
                        })
                       
                    </script>

                    
                   