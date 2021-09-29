
<?php include '../include/header.php'?>
<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                    <div class="col-xl">
                            <div class="card" style="width:70%; display:content;">
                                <div class="card-body" >
                                    
                        <div class="col-md-12">
                            <div class="page-title">
                                <center>
                                <h3>Login Page</h3>
                                    <form  id='login-form'style="max-width:300px;">    
                            
                                    <div class="form-group" >
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        <span class="set">
                                                <i class="fa fa-eye" id="eye" onclick="toggle()" ></i>
                                                </span>
                                        <a href="forgetpass.php" style="float:right;">forgot password?</a>
                                        <!-- <a href="Company-Registration.php" id="com" >Register As Company?</a>
                                        <a href="Employee-Registration.php" id="emp" >Register As Employee?</a> -->
                                    </div>
                                    <br>
                                   <div class="form-group">
                                    <button type="submit" class="btn btn-primary"style="width:150px;" >Login</button>
                                    <br> <br>
                                    <button type="submit" id="com" class="btn btn-success">Register Company</button>
                                    <button type="submit" id="emp" class="btn btn-warning"> Register Employee</button>
                                    </div>
                                     
                                </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
                                <?php include '../include/footer.php'?>
                            </center>
                            <script>
                                $('#login-form').submit(function(event){
                                    event.preventDefault();
                                    var formdata={
                                        'email':$('#exampleInputEmail1').val(),
                                        'password':$('#exampleInputPassword1').val()
                                    };
                                    if(formdata.email=='' || formdata.password==''){
                                        swal({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    button: "Ok",
                                    });
                                    }
                                    else{
                                    // alert(formdata.password);
                                    $.ajax({
                                        url:"http://192.168.0.183:8000/api/login",
                                        data:formdata,
                                        type:'POST',
                                        success:function(result){
                                    //         swal({
                                    // text:result.status_message ,
                                    // icon: "success",
                                    // button: "Ok",
                                    // });
                                    $("body").load("dashboard.php");
                                    
                                    console.log(result);
                                           
                                            console.log(result);
                                        },
                                        error:function(error){
                                    swal({
                                    text:"You are not signed Up!!",
                                    icon: "error",
                                    button: "Ok",
                                    }); 
                                    console.log(error);
                                }
                            });
                            }
                        })
                        $('#com').click(function(){
                        $("body").load("Company-Registration.php");
                        });

                        $('#emp').click(function(){
                        $("body").load("Employee-Registration.php");
                        });
                                </script>
                                           <script>
                                var state=false;
                                function toggle(){
                                    if(state){
                                        document.getElementById("exampleInputPassword1").
                                            setAttribute("type","password");
                                            document.getElementById("eye").style.color="#7a797e";
                                            state=false;
                                    }
                                    else{
                                        document.getElementById("exampleInputPassword1").
                                            setAttribute("type","text");
                                            document.getElementById("eye").style.color="#5887ef";
                                            state=true;
                                    }
                                }
                        </script>