
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
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
                                <?php include '..\include\footer.php'?>
                            </center>
                            <script>
                                $('#login-form').submit(function(event){
                                    event.preventDefault();
                                    var formdata={
                                        'email':$('#exampleInputEmail1').val(),
                                        'password':$('#exampleInputPassword1').val()
                                    };
                                    alert(formdata.password);
                                    $.ajax({
                                        url:"http://192.168.0.183:8000/api/login",
                                        type:'POST',
                                        data:formdata,
                                        succes:function(result){
                                            alet(result);
                                            console.log(result);
                                        },
                                        error:function(result){
                                            console.log(result);
                                        }
                                    });
                                })
                                </script>
                                          