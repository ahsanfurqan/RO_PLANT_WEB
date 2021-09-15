<?php include '../include/header.php'?>
<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                 
                                </nav>
                                <h3>EMPLOYEE REGISTRATION</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                         <form id='emp_reg'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Employee Name</label>
                                                <input type="text" class="form-control" id="inputname"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Employee Phone Number</label>
                                                <input type="text" class="form-control" id="inputphone"  placeholder="03**-*******" require>
                                            </div>
                                           
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="inputaddress">Address</label>
                                                <input type="text" class="form-control" id="inputaddress"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputemail">Email</label>
                                                <input type="Email" class="form-control" id="inputemail"  placeholder="" require>
                                            </div>
                                           
                                            

                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" require>
                                               
                                                <span>
                                                <i class="fa fa-eye" id="eye"  ></i>
                                                </span>
                                            </div>
                                        <div class="form-group col-md-6">
                                                <label for="inputPassword5">Confirm Password</label>
                                                <input type="password" class="form-control" id="inputPassword5" placeholder="Confirm Password" require>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="input-date">Date of Joining</label>
                                                <input type="date" class="form-control" id="input-date">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="input-salary">Salary</label>
                                                <input type="number" class="form-control" id="input-salary">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Registor</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <?php include '../include/footer.php'?>


                    <script>
                        $('#emp_reg').submit(function(event){
                            event.preventDefault();
                            var formdata={
                                'name':$('#inputname').val(),
                                'email':$('#inputemail').val(),
                                'phone_number':$("#inputphone").val(),
                                'salary':$('#input-salary').val(),
                                'password':$('#inputPassword4').val(),
                                'confirm_password':$('#inputPassword5').val(),
                                'date_of_joining':$('#input-date').val(),
                                'address':$('#inputaddress').val(),
                            };
                            if(formdata.name=='' || formdata.email==''|| formdata.phone_number==''|| formdata.salary==''||formdata.password==''
                            || formdata.confirm_password=='' || formdata.date_of_joining=='' || formdata.address==''){
                                swal({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    button: "Ok",
                                    });
                            }
                            else{
                           
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/register/employee",
                                data:formdata,
                                type:'POST',
                                success:function(result){
                                    swal({
                                    text:result.status_message ,
                                    icon: "success",
                                    button: "Ok",
                                    }); 
                                    console.log(result);
                                },
                                error:function(error){
                                    swal({
                                    text:"Data is not valid or a company may be registered with this data ",
                                    icon: "error",
                                    button: "Ok",
                                    }); 
                                    console.log(error);
                                }
                            });
                            }
                        })
                    </script>
                    
