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
        
                    <?php include '..\include\footer.php'?>  
                    
