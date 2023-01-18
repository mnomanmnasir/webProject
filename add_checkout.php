<?php
include "./conn.php";


if (count($_POST) > 0) {
    $country = $_POST['country'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $companyName = $_POST['companyName'];
    $address = $_POST['address'];
    $townCity = $_POST['townCity'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO checkout (country, firstName,lastName,companyName,address,townCity,email,phone)
    VALUES ('" . $country . "', '" . $firstName . "','" . $lastName . "','" . $companyName . "','" . $address . "','" . $townCity . "''" . $email . "','" . $phone . "')";
    //echo $sql;die; 
    if (mysqli_query($conn, $sql)) {
        $is_insert = true;
        $msg = "New record created successfully";
    } else {
        $is_insert = false;
        $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <header>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">
                    <div class="logo">
                        <img src="./images/Logo.png" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="navbar">
                        <ul>
                            <li><a href="home.php"> Home</a></li>
                            <li><a href="about.php"> About us</a></li>
                            <li><a href="productdetails.php">Product Details</a></li>
                            <li><a href="contactus.php"> Contact us</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-2">
                    <div class="nav-icons">
                        <img src="./images/person.png" alt="" srcset="">
                        <img src="./images/more.png" alt="" srcset="">
                        <a href="./cert.php"> <img src="./images/(53) WhatsApp_files/cert.svg" id="nav-svg" alt=""
                                srcset=""></a>


                    </div>
                    <!-- <i width="50" class="fa fa-shopping-cart" aria-hidden="true"></i> -->

                </div>
            </div>
        </div>
    </header>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner-image.png" class="d-block w-100" alt="images">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <!-- <h5>First slide label</h5> -->
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner-image.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner-image.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>
    </section>



    <!-- checkout page -->


    <section class="checkOut">
        <div class="container">
            <h1>Check Out</h1>
            <div class="row CheckOutItem">
                <div class="col-lg-12">
                    <div class="CheckOutItemHeading">

                        <h2 class="bill_address">Bill Address</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="country">Country</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="country">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="firstName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="companyName">Company Name</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="companyName">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="address">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="townCity">Town/City</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="text" name="townCity">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="CheckOut_items">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="label">
                                    <label for="phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="input"></div>
                                <input type="number" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ordered_list">
                        <div class="ordered_items">
                            <h3>Your Order</h3>
                        </div>
                        <div class="ordered_item">
                            <span>Cart Subtotal</span>
                            <span class="alignItemRight">$123.00</span>
                        </div>
                        <div class="ordered_item">
                            <span>Your Order</span>
                            <span class="alignItemRight">Free Shiping</span>
                        </div>
                        <div class="ordered_item">
                            <span>Order Total</span>
                            <span class="alignItemRight">$123.00</span>
                        </div>
                        <div class="ordered_items">
                            <h3>Payment Method</h3>
                            <div class="paymentMethod">
                                <div class="payment">
                                    <input type="checkbox" name="cheque" id="">
                                    <label for="cheque"> Cheque</label>
                                </div>
                                <div class="payment">
                                    <input type="checkbox" name="paypal" id="">
                                    <label for="paypal">Paypal</label>
                                    <img src="./images/paypal.png" alt="" width="30%">
                                </div>
                            </div>
                            <div class="placeOrder">
                                <a href="cert.php" style="text-decoration: none; color:white">
                                    <h5>Place Order</h5>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>







    <footer class="footer">
        <div class="container">
            <!-- <div class="cta d-block d-lg-flex align-items-lg-end px-3">
                <div>
                  <h2>Subscribe Now</h2>
                </div>
                <div class="button4">
                    <a href="#" class="btn"><button> Subscribe Now </button></a>
                  </div>
              </div> -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="footerLogo">

                        <img src="./images/LogoW.png" alt="">
                    </div>
                    <div class="info">
                        <div>
                            <img src="./images/mail.png" alt="">
                            <h6>Lorem ipsum@gmail.com</h6>
                        </div>
                        <div>

                            <img src="./images/call.png" alt="">
                            <h6>(012)2918307</h6>
                        </div>
                        <div>

                            <img src="./images/location.png" alt="">
                            <h6>lorem ipsum ad305 street</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


</body>

</html>