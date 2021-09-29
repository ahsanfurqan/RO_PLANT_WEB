<?php include '../include/header.php'?>
<div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                    <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    
                        <div class="col-md-12">
                            <div class="page-title">
                            <nav aria-label="breadcrumb">
                                  
                                  </nav>
                                <h3>Customer Registration</h3>
                                    <form id='cust_reg'>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Name</label>
                                                <input type="text" class="form-control" id="inputname"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress"> Address </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" require>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Phone Number</label>
                                                <input type="text" class="form-control" id="inputphone"  placeholder="03**-*******">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputprice"> Price/Rate </label>
                                                <input type="float" class="form-control" id="inputprice">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Registor</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                    

<?php include '../include/footer.php'?> 
<script>
                        $('#cust_reg').submit(function(event){
                            event.preventDefault();
                            var formdata={
                                "name":$('#inputname').val(),
                                "address":$('#inputAddress').val(),
                                "phone_number":$('#inputphone').val(),
                                "price":$('#inputprice').val(),
                                "company_id":'12',
                            };
                            if(formdata.name=='' || formdata.address==''||formdata.phone_number==''||formdata.price=='' || formdata.company_id==''){
                                swal.fire({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    // button: "Ok",
                                    });
                            }
                            else{
                            
                            jQuery.ajax({
                                url:"http://192.168.0.183:8000/api/register/client",
                                data:formdata,
                                type:'POST',
                                datatype:'json',
                                success: function(result){
                                    // alert(result.status_message)
                                    swal.fire({
                                    text:result.status_message ,
                                    icon: "success",
                                    // button: "Ok",
                                    }); 
                                    $("body").load("customer-detail.php"); 
                                $('#inputname').val("");
                                $('#inputAddress').val("");
                                $('#inputphone').val("");
                                $('#inputprice').val("");
                                    // console.log(result);
                                },
                                error: function (error) {

                                    swal.fire({
                                    text:"Data is not valid ",
                                    icon: "warning",
                                    // button: "Ok",
                                    }); 
                                    console.log(error);
                                }
                            });
                            }
                        })
                    </script>