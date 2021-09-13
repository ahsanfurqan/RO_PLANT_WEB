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
                                <h3>Forgot Password?</h3>
                                    <form id='forgot'  style="max-width:300px;">    
                            
                                    <div class="form-group" >
                                        <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary"><a href="resetpass.php" style="color:#fff">Submit</a></button>
                                        
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
                                $('#forgot').submit(function(event){
                                    event.preventDefault();
                                    var formdata={
                                        'email':$('#exampleInputEmail2').val(),
                                    };
                                    // alert(formdata.password);
                                    $.ajax({
                                        url:"http://192.168.0.183:8000/api/forgot-password",
                                        data:formdata,
                                        type:'POST',
                                        success:function(result){
                                            alert(result.status_message);
                                            console.log(result);
                                        },
                                        error:function(result){
                                            console.log(result);
                                        }
                                    });
                                })
                                </script>
      