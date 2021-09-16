  <?php include '..\include\header.php'?>

<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3>Bill Details</h3>
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
                                    <form id="bill_details">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Client Name</label>
                                                <input type="text" class="form-control" onkeyup=filter(this.id) id="inputname" >
                                            </div>
                                            
                                          
                                        </div>
                                       
                                        

                                    </form>
                                </div>
                            </div>
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
</div>
<div class="row">
                    <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    
                        <div class="col-md-12">
<table class="table" id="myTable">
    
    <tbody>
     
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Bill id</th>
        <th>Used Bottle </th>
        <th>Amount</th>
        <th>Edit<th>
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
        
      </tr>
      <tr class="">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       
      </tr>
       -->
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>

<?php include '../include/footer.php'?>
<script>

                    $.ajax({
                      url:"http://192.168.18.43:8000/api/bill",
                      type:'GET',
                      success:function(data){
                        if(data.status_message){
                          console.log(data.status_message)
                        }

                        else{
                          for(var i=0; i<data.length; i++){
                                      var html='<tr >';
                                      html+='<td>'+data[i].client.name+'</td>';
                                      html+='<td>'+data[i].bill_id+'</td>';
                                      html+='<td>'+data[i].used_bottles+'</td>';
                                      html+='<td>'+data[i].amount+'</td>';
                                      html+='<td> <i class="fa fa-trash"id="'+data[i].bill_id+'" onClick= passData(this,this.id)></i></td> </tr>';
                                      
                                    
                                      $('#table_data').append(html);
                          }
                        }
                        
                        
                      },
                      // error:function(error){
                        
                      //   swal({
                      //               text:"No Data Exist!! ",
                      //               icon: "error",
                      //               button: "Ok",
                      //               }); 
                      // }
                    })
                   function passData(btn,bill_id){
                    //  var name=document.getElementbyid(bill_id);
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                    
                    $.ajax({
                       url:"http://192.168.18.43:8000/api/delete/bill/"+bill_id,
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
 