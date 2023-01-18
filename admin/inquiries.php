<?php
session_start();
include "../conn.php";
// include 'function.php';
// check_timeout();
// wa_auth();

$sql = "SELECT * FROM contactus";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Inquiry Management</title>
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
            <h5><b><i class="fa fa-dashboard"></i> Inquiry Management</b></h5>
        </header>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-container">
                <a href='../contactus.php' class="w3-button w3-dark-grey"><i
                        class="fa fa-arrow-right"></i></a><br /><br />

                <?php
                if (isset($_GET['type'])) {
                    switch ($_GET['type']) {
                        case 'success':
                            echo "<div class='alert alert-success'><strong>Success!</strong> " . $_GET['msg'] . " </div>";
                            break;
                        case 'error':
                            echo "<div class='alert alert-danger'><strong>Error!</strong> " . $_GET['msg'] . " </div>";
                            break;
                        default:
                            echo "<div class='alert alert-warning'><strong>Warning!</strong> Some thing wrong please try again </div>";
                            break;
                    }
                }
                ?>

                <?php
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">

                        <tr>
                            <td>name</td>
                            <td>email</td>
                            <td>phone</td>
                            <td>subject</td>
                            <td>message</td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            print_r($row);
                            ?>
                            <tr>
                                <td><?php echo $row["name"]; ?></td>
                                <td>
                                    <?php echo $row["email"]; ?>
                                </td>
                                <td><?php echo $row["phone"]; ?></td>


                                <td><?php echo $row["subject"]; ?></td>

                                <td><?php echo $row["message"]; ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                } else {
                    echo "0 results";
                }
                ?>
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