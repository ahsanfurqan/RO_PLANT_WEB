  <?php include '..\include\header.php'?>
<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                
                                <h3>Bill Details</h3>
                                    <form id="bill_details">>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Client ID</label>
                                                <input type="number" class="form-control" id="inputname" >
                                            </div>
                                            
                                          
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <table class="table" id="makeEditable">
    
    <tbody>
     
    <thead>
      <tr>
        <th>Bill ID</th>
        <th>Client Name</th>
        <th>Used Bottle </th>
        <th>Amount</th>
        
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $('#bill_details').submit(function(event){
                            event.preventDefault();
                            var name=$('#inputname').val();
                            
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/search/bill/"+name,
                                // data:formdata,
                                type:'GET',
                                success: function(result){
                                  // alert(result[0].bill_id);
                                    if(result[0].bill_id){
                                      for(var i=0;i<result.length; i++){
                                      var html='<tr>';
                                      html+='<td>'+result[i].bill_id+'</td>';
                                      html+='<td>'+result[i].client_id+'</td>';
                                      html+='<td>'+result[i].used_bottles+'</td>';
                                      
                                      html+='<td>'+result[i].amount+'</td></tr>';
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
<?php include '..\include\footer.php'?> 