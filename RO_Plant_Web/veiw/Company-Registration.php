<?php include '../include/header.php'?>

<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3>Company Registration</h3>
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
                                    <form id='comp_reg' class='comp_reg'>
                                        <input type="hidden" name='_token' value='{{csrf_token()}}'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Company Name</label>
                                                <input type="text"  id="inputname" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Phone Number</label>
                                                <input type="text"  id="inputphone" class="form-control"  placeholder="03**-*******" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Total Bottles</label>
                                                <input type="number"  id="inputT-bottles" class="form-control"  placeholder=""require>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>
<?php include '../include/footer.php'?> 
                    

                     
                    
        <script>
                        $('#comp_reg').submit(function(event){
                            event.preventDefault();
                            // var name=$("#inputname").val();
                            // var phone=$("#inputphone").val();
                            // var bottle=$("#inputT-bottles").val();
                            var formdata={
                                "name":$('#inputname').val(),
                                "phone_number":$('#inputphone').val(),
                                "total_bottles":$('#inputT-bottles').val(),
                            };
                            if( formdata.name=='' ||  formdata.phone_number=='' ||  formdata.total_bottles==''){
                                swal({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    button: "Ok",
                                    });
                            }
                            else{
                                
                            
                            // alert(formdata.phone_number);
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/register/company",
                                data:formdata,
                                type:'POST',
                                success: function(result){
                                    // alert(result.status_message);
                                    swal({
                                    text:result.status_message ,
                                    icon: "success",
                                    button: "Ok",
                                    });
                                },
                                error:function(result){
                                    alert(result[0]);
                                }
                            });
                            
                            }
                        })
                    </script> 
                  
                    