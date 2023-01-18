<?php
session_start();
include "../conn.php";
include 'function.php';
check_timeout();
wa_auth();



//echo $sql;die; 


if (isset($_GET['id']) and intval($_GET['id']) > 0) {
    $id = $_GET['id'];

    
    $fetched_record = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $fetched_record);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $phone = $row['phone'];
            $password = $row['password'];
        }
    } else {
        header('Location: http://localhost/bootstrap/admin/users.php?type=error&msg=' . urlencode("Invalid User found"));
    }
} else {
    header('Location: http://localhost/bootstrap/admin/users.php?type=error&msg=' . urlencode("Invalid User found"));
}
if (count($_POST) > 0) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    // $id = intval($_POST['id']);


    $sql = "UPDATE users
    SET 
      `firstname`='$firstname' ,
      `lastname`='$lastname' ,
      `email`='$email' ,
      `phone`='$phone' ,
      `password`='$password'
    WHERE id=$id";

 if (mysqli_query($conn, $sql)) {
    $is_insert = true;
    $msg = "Record Updated successfully";
} else {
    $is_insert = false;
    $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>User Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right">Logo</span>
    </div>

    <?php
    include('_navigation.php');
    ?>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> Add New Product</b></h5>
        </header>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-container">
                <a href='users.php' class="w3-button w3-dark-grey">User Management <i
                        class="fa fa-arrow-right"></i></a><br /><br />

                <div class="container">
                    <h2>User Data</h2>
                    <?php
                    if (count($_POST) > 0) {
                        if ($is_insert == true) {
                            echo '<div class="alert alert-success">' . $msg . '<strong>Success!</strong> </div>';
                        } else {
                            echo '<div class="alert alert-danger">' . $msg . '<strong>Error!</strong> </div>';
                        }
                    }
                    ?>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="firstname">Enter First Name:<span style='color:red'>*</span></label>
                            <input type="text" class="form-control" required="" value='<?= $firstname ?>'
                                name="firstname" id="firstname" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Enter Lastname:<span style='color:red'>*</span></label>
                            <input type="text" class="form-control" required="" value='<?= $lastname ?>' name="lastname"
                                id="lastname" placeholder="Enter Lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Enter Email:<span style='color:red'>*</span></label>
                            <input type="email" class="form-control" required="" value='<?= $email ?>' name="email"
                                id="email" placeholder="Enter Email:">
                        </div>
                        <div class="form-group">
                            <label for="phone">Enter Phone Number:<span style='color:red'>*</span></label>
                            <input type="number" class="form-control" required="" value='<?= $phone ?>' name="phone"
                                id="phone" placeholder="Enter Phone:">
                        </div>

                        <div class="form-group">
                            <label for="password">Enter Your Password:<span style='color:red'>*</span></label>
                            <input type="password" class="form-control" required="" name="password" id="password"
                                placeholder="Enter Password">
                        </div>




                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>

            </div>
        </div>


    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

</body>

</html>