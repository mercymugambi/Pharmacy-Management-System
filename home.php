<?php
require_once('include/session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name= "author" content="">
        <title> Madawa Pharmacy & Monitoring System </title>

        <!--Bootstrap core css-->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
        <!--Custom CSS --->
        <link href="assets/css/sb-admin.css" rel="stylesheet">

        <!--Morris Chats css--->
        <link href="assets/css/plugins/morris.css" rel="stylesheet">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!--Custm Fonts --->
        <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>
<body>
<style>
        body {background-color: powderblue;}
        </style>
    <div id="wrapper">
        <!--Navigation--->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!--Brand and toggle get grouped for better mobile display-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Regis Inventory and Monitoring System</a>

            </div>
            <!--Top Menu Items--->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li> 
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar menu items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-exl-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i>Home</a>
                    </li>
                    <li>
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></i>Item List</a>
                    </li>
                    <li>
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>Product Profile</a>
                    </li>
                    <li>
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></i>Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></i>Expired</a>
                    </li>
                    <li>
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></i>Sales</a>
                    </li>    
                </ul>

            </div>
            <!-- Navbar collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome <small>Administrator</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i>Home
                            </li>
                                
                        </ol>
                    </div>

                </div>
                <!-- Row -->
                <div id="order"></div>
            </div>
            <!-- Container- Fluid -->

        </div>
        <!-- Page wrapper -->
    </div>
    <!--Wrapper -->
    <?php include_once('modal/to_cart.php');?>
    <?php include_once('modal/confirmation.php');?>
    <?php include_once('modal/add_new_item.php');?>
    <?php include_once('modal/message.php');?>

        <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/regis.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>