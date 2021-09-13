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
                                                <input type="text"  id="inputphone" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Total Bottles</label>
                                                <input type="number"  id="inputT-bottles" class="form-control"  placeholder=""require>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>
                    
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
                        $('#comp_reg').submit(function(event){
                            event.preventDefault();
                            var formdata={
                                "name":$('#inputname').val(),
                                "phone_number":$('#inputphone').val(),
                                "total_bottles":$('#inputT-bottles').val(),
                            };
                            // alert(formdata.phone_number)
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/register/company",
                                data:formdata,
                                type:'POST',
                                success: function(result){
                                    alert(result.status_message);
                                },
                                error:function(result){
                                    alert(result[0]);
                                }
                            });
                        })
                    </script>   
                    <?php include '../include/footer.php'?>  