<?php
require_once "./includes/login/login_view.php";
include "./middleware/admin_middleware.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormlink - Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
</head>

<body>
    <div class="admin_dashboard_container1">
        <!-- header -->
        <?php include('./templates/logged_in_header_admin.php'); ?>
        <!-- header -->
    </div>

    <!-- page content -->
    <!-- HEAD -->
    <div class="admin_dashboard_container2">
        <a href="billing_management_page.php" class="dashboard-box box1">
            <h3>Total Tenants</h3>
            <p>0</p>
        </a>

        <a href="billing_management_page.php" class="dashboard-box box2">
            <h3>Total Rooms</h3>
            <p>69</p>
        </a>

        <a href="billing_management_page.php"class="dashboard-box box3">
            <h3>Total Beds</h3>
            <p>242</p>
        </a>

        <a href="billing_management_page.php"class="dashboard-box box4">
            <h3>Unpaid Invoices</h3>
            <p>0</p>
        </a>

        <a href="billing_management_page.php" class="dashboard-box box5">
            <h3>Total Balance Amount</h3>
            <p>0</p>
        </a>
        
        <a href="billing_management_page.php" class="dashboard-box box6">
            <h3>Total Paid Amount</h3>
            <p>0</p>
        </a>

        <!-- Dynamic month names -->
        <a href="billing_management_page.php" class="dashboard-box box7">
            <h3><?php echo date('F'); ?> Income</h3>
            <p>0</p>
        </a>

        <a href="billing_management_page.php" class="dashboard-box box8">
            <h3><?php echo date('F'); ?> Expense</h3>
            <p>0</p>
        </a>         
    </div>

    <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="admin_dashboard_container2">
            <a href="billing_management_page.php" class="dashboard-box box1">
                <img src="Assets/box1icon.png" alt="Total Tenants Icon" class="box-icon">
                <div class="box-content">
                <h3>Total Tenants</h3>
                <p>0</p>
                </div>  
            </a>

            <a href="billing_management_page.php" class="dashboard-box box2">
                <img src="Assets/box2icon.png" alt="Total Rooms Icon" class="box-icon">
                <div class="box-content">
                <h3>Total Rooms</h3>
                <p>69</p> 
                </div>  
            </a>

            <a href="billing_management_page.php"class="dashboard-box box3">
                <img src="Assets/box3icon.png" alt="Total Beds Icon" class="box-icon">
                <div class="box-content">
                <h3>Total Beds</h3>
                <p>242</p>
                </div> 
            </a>

            <a href="billing_management_page.php"class="dashboard-box box4">
                <img src="Assets/box4icon.png" alt="Unpaid Icon" class="box-icon">
                <div class="box-content">  
                <h3>Unpaid Invoices</h3>
                <p>0</p>
                </div>
            </a>

            <a href="billing_management_page.php" class="dashboard-box box5">
                <img src="Assets/box5icon.png" alt="Total Balances Icon" class="box-icon">
                <div class="box-content">
                <h3>Total Balance Amount</h3>
                <p>0</p>
                </div>
            </a>
            
            <a href="billing_management_page.php" class="dashboard-box box6">
                <img src="Assets/box6icon.png" alt="Total Paid Icon" class="box-icon">
                <div class="box-content">
                <h3>Total Paid Amount</h3>
                <p>0</p>
                </div>
            </a>

            <!-- Dynamic month names -->
            <a href="samplePage.php" class="dashboard-box box7">
                <img src="Assets/box7icon.png" alt="Income Icon" class="box-icon">
                <div class="box-content">
                <h3><?php echo date('F'); ?> Income</h3>
                <p>0</p>
                </div>
            </a>

            <a href="samplePage.php" class="dashboard-box box8">
                <img src="Assets/box8icon.png" alt="Expenses Icon" class="box-icon">
                <div class="box-content">
                <h3><?php echo date('F'); ?> Expense</h3>
                <p>0</p>
                </div>
            </a>

            <div class="charts">

                <div class="charts-card">
                    <h2 class="chart-title">Sample Overview</h2>
                    <div id="bar-chart"></div>
                </div>

                <div class="charts-card">
                    <h2 class="chart-title">Reservation Statistics</h2>
                    <div id="area-chart"></div>
                </div>

            </div>         
        </div>

        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="javascript/admin_dashboard.js"></script>
>>>>>>> e3c9b483a97e5f8f8c6691a0e753b37879a9d109
</body>

</html>
