<?php include '../include/header.php'?>
        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb breadcrumb-separator-1">
                                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Forms</li>
                                  </ol>
                                </nav>
                                <h3>Details</h3>
                                <p class="page-desc">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">ORDER.</h5>
                                    
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Customer Name</label>
                                                <input type="text"  id="name" class="form-control"  placeholder="" require>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="cust">Custumer ID</label>
                                                <input type="text"  id="cust" class="form-control"  placeholder="" require>
                                              </div> 
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        

                                        </div>
                                        <h2>Order History</h2>

<table class="t1">
  <tr class="r1">
    <th>Customer Name</th>
    <th>Customer ID</th>
    <th>Empty Bottles</th>
    <th>Filled Bottles</th>
    <th>Date</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '..\include\footer.php'?>