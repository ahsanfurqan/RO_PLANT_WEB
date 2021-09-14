<?php include '../include/header.php'?>
        
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  
                                </nav>
                                <h3>ORDER</h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                    <form id='order_form'>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Barcode</label>
                                                <input type="text"  id="barcode" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Empty Bottles</label>
                                                <input type="text"  id="e_bottles" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Filled Bottles</label>
                                                <input type="text"  id="f_bottles" class="form-control"  placeholder=""require>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '../include/footer.php'?>       
               <script>
                   $('#order_form').submit(function(event){
                        event.preventDefault();
                            var formdata={
                                'barcode':$('#barcode').val(),
                                'empty':$('#e_bottles').val(),
                                'filled':$('#f_bottles').val(),
                                'token':"Ro66yMNTYNZAlO2usbnjITJWhIPAQ792nTvwLzMj6zbYGhlWUgxVUNOeuKLF",
                            };
                            $.ajax({
                                url:"http://192.168.0.183:8000/api/add/order",
                                type:'POST',
                                data:formdata,
                                success: function(result){
                                    alert(result.status_message);
                                    console.log(result.status_message);
                                },
                                error:function(result){
                                    console.log(result);
                                }
                            });
                   })
               </script>
                 
