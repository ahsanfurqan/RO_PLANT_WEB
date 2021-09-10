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
                                    <form >
                                       
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
                        <div class="lime-container">
            <div class="lime-body">
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
                        <div class="lime-body">
                <div class="container">
                    <div class="row">
                    <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                        

<table class="table" id="makeEditable">

<!-- <tbody> -->

<thead>
<tr>
<th>Employee Name</th>
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
<?php include '..\include\footer.php'?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                    $('#emp_details').submit(function(event){
                            event.preventDefault();
                            var name=$('#name').val();
                            
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/search/employee/"+name,
                                // data:formdata,
                                type:'GET',
                                success: function(result){
                                    if(result[0].name){
                                      for(var i=0;i<result.length; i++){
                                      var html='<tr>';
                                      html+='<td>'+result[i].name+'</td>';
                                      html+='<td>'+result[i].phone_number+'</td>';
                                      html+='<td>'+result[i].date_of_joining+'</td>';
                                      html+='<td>'+result[i].salary+'</td></tr>';
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
                      