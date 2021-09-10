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
                                                <input type="text" class="form-control" id="inputphone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputprice"> Price/Rate </label>
                                                <input type="number" class="form-control" id="inputprice">
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
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $('#cust_reg').submit(function(event){
                            event.preventDefault();
                            var formdata={
                                "name":$('#inputname').val(),
                                "address":$('#inputAddress').val(),
                                "phone_number":$('#inputphone').val(),
                                "price":$('#inputprice').val(),
                                "company_id":$('#inputc-id').val(),
                            };
                            // alert(formdata.company_id);
                            jQuery.ajax({
                                url:"http://192.168.0.183:8000/api/register/customer",
                                data:formdata,
                                type:'POST',
                                datatype:'json',
                                success: function(result){
                                    console.log(result);
                                }
                            });
                        })
                    </script>

<?php include '..\include\footer.php'?> 