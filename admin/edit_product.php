<?php
session_start();
include "../conn.php";
include 'function.php';
check_timeout();
wa_auth();

if (count($_POST) > 0) {
    // File Uploading Script Start
    $image_path = "images/";
    if (isset($_FILES["fileToUpload"]["name"])) {
        $target_dir = "../images/";
        $filename = rand(11111, 999999) . basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . $filename;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // $filename = $filename;
        } else {
            $filename = "img1.jpg";
        }
    } else {
        $filename = $filename;
    }
    // File Uploading Script End


    $image = $filename;
    $image_path = $image_path;
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $id = intval($_POST['id']);

    $sql = "UPDATE products 
    SET 
      `name`='$name' ,
      `price`='$price' ,
      `image`='$image' ,
      `image_path`='$image_path' ,
      `description`='$desc'
    WHERE id=$id";


    //echo $sql;die; 
    if (mysqli_query($conn, $sql)) {
        $is_insert = true;
        $msg = "Record Updated successfully";
    } else {
        $is_insert = false;
        $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_GET['id']) and intval($_GET['id']) > 0) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $description = $row['description'];
            $image_name = $row['image'];
            $image = 'bootstrap' . $row['image_path'] . $row['image'];
        }
    } else {
        header('Location: http://localhost/bootstrap/admin/products.php?type=error&msg=' . urlencode("Invalid Product found"));
    }
} else {
    header('Location: http://localhost/bootstrap/admin/products.php?type=error&msg=' . urlencode("Invalid Product found"));
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Products Management</title>
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
                <a href='products.php' class="w3-button w3-dark-grey">Products Management <i
                        class="fa fa-arrow-right"></i></a><br /><br />


                <div class="container">
                    <h2>Product Data</h2>
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
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="image_name" value="<?= $image_name ?>">
                        <div class="form-group">
                            <label for="Firstname">Name:<span style='color:red'>*</span></label>
                            <input type="text" class="form-control" required="" value='<?= $name ?>' name="name" id="name"
                                placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="Lastname">Price:<span style='color:red'>*</span></label>
                            <input type="text" class="form-control" required="" value='<?= $price ?>' name="price"
                                id="price" placeholder="Enter Price">
                        </div>
                        <!-- 
      <div class="form-group">
        <label for="Email">Image:<span style='color:red'>*</span></label>
        <input type="text" class="form-control" required="" name="image" id="image" placeholder="Enter image">
      </div>

      <div class="form-group">
        <label for="Phone">Image Path:<span style='color:red'>*</span></label>
        <input type="text" class="form-control" required="" name="image_path" id="image_path" placeholder="Enter Image Path">
      </div>
 -->
                        <div class="form-group">
                            <label for="Phone">
                                Image <span style='color:red'>*</span>
                                <a href="<?= $image ?>" target='_blank'>View Image</a>
                            </label>
                            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"
                                placeholder="Enter Image Path">

                        </div>

                        <div class="form-group">
                            <label for="pwd">Desc:<span style='color:red'>*</span></label>
                            <textarea class="form-control" required="" name="desc"><?= $description ?></textarea>
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