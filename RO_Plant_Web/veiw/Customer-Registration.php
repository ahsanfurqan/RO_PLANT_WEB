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
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                                <label for="inputC-id">Company-ID</label>
                                                <select id="inputc-id" class="form-control custom-select">
                                                    <option selected>Choose...</option>
                                                    <option>1</option>
                                                </select>
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
                                "company_id":'7',
                            };
                            if(formdata.name=='' || formdata.address==''||formdata.phone_number==''||formdata.price=='' || formdata.company_id==''){
                                swal({
                                    title: "Fields Empty",
                                    text: "Please Check the missing Values!!",
                                    icon: "warning",
                                    button: "Ok",
                                    });
                            }
                            else{
                            // alert(formdata.company_id);
                            jQuery.ajax({
                                url:"http://192.168.18.43:8000/api/register/client",
                                data:formdata,
                                type:'POST',
                                datatype:'json',
                                success: function(result){
                                    // alert(result.status_message)
                                    swal({
                                    text:result.status_message ,
                                    icon: "success",
                                    button: "Ok",
                                    }); 
                                    console.log(result);
                                },
                                error: function (error) {

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