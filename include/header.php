<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>RO PLANT</title>

        <!-- Styles -->
        <link href="../assets/font-awesome/Style1.css" rel="stylesheet">
        <link href="../assets/font-awesome/style2.css" rel="stylesheet">
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="../assets/css/lime.min.css" rel="stylesheet">
        <link href="../assets/css/custom.css" rel="stylesheet">
       <!-- CSS -->

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
=======
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
>>>>>>> bf1b5ffd4147b5060c376944038c2fd16e943241
  -->

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

 
</style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    </head>

    <body>
        
        <div class="lime-sidebar">
            <div class="lime-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Menu
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href="Company-Registration.php"><i class="material-icons">business</i>Company Registration</a>
                    </li>
                    <li>
                        <a href="company-details.php"><i class="material-icons">business</i>Company Details</a>
                    </li>
                    <li>
                        <a href="Employee-Registration.php"><i class="material-icons">badge</i>Employee Registration</a>
                    </li>
                    <li>
                        <a href="employee-details.php"><i class="material-icons">badge</i>Employee Details</a>
                    </li>
                    <li>
                        <a href="Customer-Registration.php"><i class="material-icons">support_agent</i>Customer Registration</a>
                    </li>
                    <li>
                        <a href="customer-detail.php"><i class="material-icons">history</i>Customer Details</a>
                    </li>
                    <li>
                        <a href="order.php"><i class="material-icons">timeline</i>Orders</a>
                    </li>
                    <li>
                        <a href="Bill-Detail.php"><i class="material-icons">receipt</i>Bill Details</a>
                    </li>
                    <li>
                        <a href="Login.php"><i class="material-icons">login</i>Login</a>
                    </li>
                   
                    
                            
                  
                          
                   
                    
                </ul>
            </div>
        </div>
        
        
        <div class="theme-settings-sidebar">
            <div class="theme-settings-inner">
                <h3 class="theme-sidebar-title">Themes</h3>
                <p class="themes-info">Select a demo.</p>
                
                <a class="theme-item active" href="#">
                    <img src="../../assets/images/themes/1.png" alt="">
                    <h4 class="theme-title">Classic</h4>
                </a>
                <a class="theme-item" href="#">
                    <div class="coming-theme">Coming Soon</div>
                    <img src="../../assets/images/themes/2.png" alt="">
                    <h4 class="theme-title">Dark Theme</h4>
                </a>
            </div>
        </div>
        
        <div class="lime-header">
            <nav class="navbar navbar-expand-lg">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" class="button-collapse material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <a class="navbar-brand" href="#">RO Plant</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="material-icons">keyboard_arrow_down</i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 search">
                       
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle theme-settings-link" href="#">
                                <i class="material-icons">layers</i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">Account</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>