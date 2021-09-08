<?php include '../include/header.php'?>

<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                
                                <h3>Company Registration</h3>
                                    <form id='comp_reg' class='comp_reg'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Company Name</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="" require >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Phone Number</label>
                                                <input type="text" class="form-control" id="inputphone"  placeholder="" require >
                                            </div>
                                            </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="input T-bottles">Total Bottles</label>
                                                <input type="number" class="form-control" id="inputT-bottles">
                                            </div>
                                          
                                        </div>
                                        <button type="submit" class="btn btn-primary">Registor</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
        
                    <?php include '..\include\footer.php'?>  
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $('#comp_reg').submit(function(event){
                            event.preventDefault();
                            var formdata={
                                "name":$('#inputname').val(),
                                "phone_number":$('#inputphone').val(),
                                "total_bottles":$('#inputT-bottles').val(),
                            };
                            // alert(formdata.name);
                            jQuery.ajax({
                                url:"https://192.168.0.183:8000/api/register/company",
                                data:formdata,
                                type:'POST',
                                datatype:'json',
                                success: function(result){
                                    console.log(result);
                                }
                            });
                        })
                    </script>
=======

                    <?php include '..\include\footer.php'?>  
>>>>>>> 8304500b03d9ab152df177ea237f40d07f71ef67
