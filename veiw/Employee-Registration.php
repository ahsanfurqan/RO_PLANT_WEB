<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                               
                                <h3>Employee Registration</h>
                            </div>
                        </div>
                    </div>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Employee Name</label>
                                                <input type="text" class="form-control" id="inputname">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputphone">Employee Phone Number</label>
                                                <input type="text" class="form-control" id="inputphone">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputemail">Email</label>
                                                <input type="Email" class="form-control" id="inputemail">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-row">
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
                   
                    <?php include '..\include\footer.php'?>