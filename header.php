<?php include "conn.php"?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Core</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--    <link rel="stylesheet" href="css/uikit.css">-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Kh.Agro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Purchase Cattle
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="goat_dashboard.php">Goat Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="add_purchased_cattle.php">Add Purchase Cattle</a>
                    <a class="dropdown-item" href="add_born_in_frame_cattle.php">Add Born In frame Cattle</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="show_purchased_cattle.php">Show Purchase Cattle</a>
                    <a class="dropdown-item" href="show_born_in_frame_cattle.php">Show Born In Frame Cattle</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="goat_detail_page_for_born_in_frame.php">Goat Detail Page for born</a>
                    <a class="dropdown-item" href="goat_detail_page_for_purchased.php">Goat Detail Page for Purchased</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="add_cattle_medicine.php">Add Medicine</a>
                    <a class="dropdown-item" href="goat_medicine_list.php">Show All Medicine</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="add_cattle_disease.php">Add Disease</a>
                    <a class="dropdown-item" href="show_all_disease.php">Show All Disease</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="add_cattle_cost.php">Cost Add</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Born In Farm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Add New Born Cattle</a>
                    <a class="dropdown-item" href="#">Show New Born Cattle</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Test
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="test_add_data.php">Add Data</a>
                    <a class="dropdown-item" href="test_show_data.php">Show data</a>
                    <a class="dropdown-item" href="#">Update Data</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_cattle_cost.php">Accounts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feeds</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Drugs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Note</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notification <span class="notification_count">5<span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pcc.php">Poltry Cost Calculate</a>
            </li>




        </ul>
    </div>
</nav>
